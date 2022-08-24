<?php

class ContentBasedRS
{
    public $num_docs = 0;
    public $corpus_terms = array();
    public $doc_weight = array();

    function show_docs($doc)
    {
        $jumlah_doc = count($doc);
        for ($i = 0; $i < $jumlah_doc; $i++) {
            echo "Dokumen ke-$i : $doc[$i] <br /><br />";
        }
    }

    # Membuat index untuk terms dari semua dokumen
    function create_index($d)
    {
        $this->num_docs = count($d);
        for ($i = 0; $i < $this->num_docs; $i++) {

            $doc_terms = array();
            $doc_terms = explode(" ", $d[$i]);

            $num_terms = count($doc_terms);
            for ($j = 0; $j < $num_terms; $j++) {
                $term = strtolower($doc_terms[$j]);
                $this->corpus_terms[$term][] = array($i, $j);
            }
        }
    }

    function show_index()
    {

        ksort($this->corpus_terms);
        foreach ($this->corpus_terms as $term => $doc_locations) {
            echo "<b>$term:</b>";
            echo "<br />";
            foreach ($doc_locations as $doc_location) {
                echo "{" . $doc_location[0] . ", " . $doc_location[1] . "} ";
                echo "<br />";
            }
        }
    }

    # Menghitung nilai DF
    function df($term)
    {
        $d = array();
        $tr = $this->corpus_terms[$term];
        foreach ($tr as $t)
            $d[] = $t[0];

        $dx = array_unique($d);
        return count($dx);
    }

    # Menghitung Nilai IDF
    function idf()
    {
        $ndf = [];
        foreach ($this->corpus_terms as $t => $terms) {
            $df  = $this->df($t);
            $ddf = $this->num_docs / $this->df($t);
            $idf = round(log10($ddf), 4);

            $ndf[$t][0] = $df;
            $ndf[$t][1] = $idf;
        }

        return $ndf;
    }

    # Menghitung doc weight / TFIDF
    function tfidf($doc)
    {
        $ndw = [];
        $i = 0;
        foreach ($doc as $d) {
            $dterm = explode(" ", $d);
            $dx = array_count_values($dterm);
            foreach ($this->idf() as $t => $terms) {
                if (empty($dx[$t]))
                    $ndw[$i][$t] = 0;
                else $ndw[$i][$t] = $dx[$t] * $terms[1];
            }
            $i++;
        }
        $this->doc_weight = $ndw;
        return $ndw;
    }

    # Fungsi pencarian berdasar keyword
    # Pastikan keyword sudah melalui tahap pre-processing
    function search($keyword)
    {

        $key = explode(" ", $keyword);
        $score = [];
        $i = 0;
        foreach ($this->doc_weight as $ndw => $w) {
            $score[$i] = 0;
            foreach ($w as $wg => $v) {
                foreach ($key as $k) {
                    if ($k == $wg)
                        $score[$i] += $v;
                }
            }
            $i++;
        }

        arsort($score);
        return $score;
    }
}
