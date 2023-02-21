<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Files </title>
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
            <h1 class="text-2xl">02-construct</h1>
        </header>
        <section class=" max-h-[350px]  overflow-y-auto m-4">
            <?php
            //atributos 
            class Playlist{
                private $name;
                private $artist = Array();
                private $album  = Array ();
                private $cover  = Array();
                private $year   = Array();

                //Methods

                public function __construct($name){
                    $this -> name = $name;

                }

                public function setPlayList($artist, $album, $cover, $year)  
                {
                    $this->artist[] = $artist;
                    $this->album[]  = $album;
                    $this->cover[]  =$cover;
                    $this->year[] =$year;
                }

                public function getPlayList(){
                    echo "<div class=' p-2 ring-1 ring-white/50'>
                        <h2 clas= 'text-center'>
                            Play list: $this->name
                        </h2>";
                    for ($i =0;$i< count($this->artist); $i++){
                        echo" <div class='bg-orange-200 flex flex-col gap-1 '><img class='rounded-full' src='".$this->cover[$i]."' alt='Album Cover'>
                        <p><strong>Artist </strong>".$this->artist[$i]."</p>
                        <p><strong>Album </strong>".$this->album[$i]."</p>
                        <p><strong>Year </strong>".$this->year[$i]."</p>";
                    "</div>";
                    }
                    echo "</div>";
                }
            }
            $playList = new PlayList('Hip Hop');
            $playList->setPlayList('Trueno','Atrevido','https://tinyurl.com/ykdr8hnv', 2020);   
            $playList->setPlayList('Kendric Lamar','Mr.Morales & The Big Steppers','https://tinyurl.com/47yupnmb', 2022);
            $playList->setPlayList('Kanye West','Donda','https://tinyurl.com/ms32ed79', 2021);
            $playList->setPlayList('Drake','Certified Lover Boy','https://tinyurl.com/42zau9j2', 2021);
            $playList->setPlayList('Tyler, the creator','IGOR','https://tinyurl.com/jwajuee6', 2019);
            echo $playList->getPlayList();
            ?>
        </section>
        </main>      
    <script src="js/tailwind-3.2.4.js"></script>    

</body>
</html>