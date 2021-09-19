<?php
    $jumlah = $_GET['number'];   
    echo "<br>";

    class iterasi {
        public function perulangan($x) 
        {
            for($i=1; $i<=$x; $i++)
            { 
                if ($i < 30)
                {
                    if($i%3==0 && $i%5==0)
                    {
                        echo $i . " Pasar 20 Belanja Pangan";
                        echo "</br>";
                    }
            
                    else if($i%3==0)
                    {
                        echo $i . " Pasar 20";
                        echo "</br>";
                    }
                    
                    else if ($i%5==0)
                    {
                        echo $i . " Belanja pangan";
                        echo "</br>";
                    }
            
                    else
                    {
                        echo $i;
                        echo "</br>";
                    }
                }
            

                if ($i >= 30)
                {
                    if($i%3==0 && $i%5==0)
                    {
                        echo $i . " Pasar 20 Belanja Pangan";
                        echo "</br>";
                    }
                    
                    else if($i%3==0)
                    {
                        echo $i . " Belanja pangan";
                        echo "</br>";
                    }
                    
                    else if ($i%5==0)
                    {
                        echo $i . " Pasar 20";
                        echo "</br>";
                    }

                    else
                    {
                        echo $i;
                        echo "</br>";
                    }
                }

                if ($i >= 75)
                {
                    break;
                }
            }
        }
    }

    $loop = new iterasi;
    $loop->perulangan($jumlah);
    //perulangan();
?>