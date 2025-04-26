<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class nilai{
        private $status;

        public function setStatus($nilai): void{
            if($nilai>= 50){
                $this->status="lulus";
            }else{
                $this->status= "tidak lulus";
            }
        }
        public function getStatus():string{
            return $this->status;
        }
    }

    $objeknilai = new nilai();
    $objeknilai->setstatus(nilai:49);
    echo $objeknilai->getStatus();
    ?>
</body>
</html>