<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01 - class</title>
    <link rel="stylesheet" href="Css/Style.css">
    
</head>
<body class="min-h-[100vh] flex justify-center items-center text-slate-500">
    <main class="w-[380px] h-[500px] bg-white/50 rounded"  >
        <header class="flex 
                        gap-4 
                        justify-center 
                        items-center
                        border-b-2
                        border-red-200
                        border-dashed
                        pb-5">
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-20 text-orange-300 hover:scale-75 transition" >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>  
            </a>
            <h1 class="text-2xl">01 - class</h1>
        </header>
        <section class="p-5 my-2 text-red  overscroll-auto m-4">
            <?php
            class vehicle {
                //atributes
                public $brand;
                public $refer;
                public $model;
                public $color;

                //metodos
                public function setAttributes($brand, $refer, $model, $color) {
                    $this->brand = $brand;
                    $this->refer=$refer;
                    $this->model=$model;
                    $this->color=$color;
                }

                public function getAttributes(){
                    return "<div class='p-4 mb-4 ring-2' >
                    <p><strong>Brand: </strong>$this->brand</p>
                    <p><strong>refer: </strong>$this->refer</p>
                    <p><strong>Model: </strong>$this->model</p>
                    <p><strong>color: </strong>$this->color</p>
    
                    </div>";
                }
            }
                //create object            
                $vehicle1= new Vehicle;
                $vehicle2= new Vehicle;
                $vehicle3= new Vehicle;
                $vehicle1->setAttributes('lambo', 'tiguan', '2023', 'spaceGray');
                $vehicle2->setAttributes('Renault', 'Sandero', '2022', 'BlackGrey');
                $vehicle2->setAttributes('Chevrolet', 'Camaro', '2012', 'RedFire');

                echo $vehicle1->getAttributes();
                echo $vehicle2->getAttributes();
                echo $vehicle3->getAttributes();
                //Acces Attributes    
                //$vehicle1->brand='toyota';
                //echo $vehicle1->brand;        
                
            ?>

        </section>
    
        </main>      
    <script src="js/tailwind-3.2.4.js"></script>    

</body>
</html>