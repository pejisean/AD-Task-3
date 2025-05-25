<?php
    require BASE_PATH . '/vendor/autoload.php';

    //Components
    require_once BASE_PATH . '/components/templates/foot.component.php';
    require_once BASE_PATH . '/components/templates/head.component.php';

    //Handlers
    require_once BASE_PATH . '/handlers/weatherData.handler.php'
?>

<?php
    head("Landing Page");
?>
<body>
    <div class="rain front-row pointer-events-none">
    </div>
    <a href="../index.php" class="fixed top-0 left-[-30] ml-2 mt-2 bg-slate-400 hover:bg-slate-500 font-bold py-2 px-2 inline-block text-center rounded fade-in">
            Return Home
    </a>
    <div class="min-h-screen flex items-center justify-center">
         <h1 class="fixed top-0 font-extrabold w-full text-center text-[50px] text-white leading-tight p-4 pointer-events-none fade-in">
            Here's the upcoming weather for the week!
        </h1>
        <div class="grid grid-cols-5 gap-6 p-8 justify-center">
            <?php
                //Weather Forecast Logic
                $weekdays = getWeatherData();

                foreach($weekdays as $day => $temp){
                    echo '<div class="bg-white bg-opacity-80 rounded-lg shadow p-6 text-center fade-in">';
                        echo '<div class="font-bold text-xl mb-2">'.$day.'</div>';
                        echo '<div class="text-4xl font-extrabold mb-2">'.$temp.'°C</div>';
                        if($temp < 0){
                            //freezing
                            echo '❄️🥶';
                        }elseif ($temp >= 0 && $temp < 10) {
                            // Cold
                            echo '🧥🌬️';
                        } elseif ($temp >= 10 && $temp < 20) {
                            // Cool
                            echo '🌤️🙂';
                        } elseif ($temp >= 20 && $temp < 25) {
                            // Mild/Comfortable
                            echo '☀️😌';
                        } elseif ($temp >= 25 && $temp < 30) {
                            // Warm
                            echo '😎🔥';
                        } else {
                            // Hot (30°C and above)
                            echo '🥵🔥☀️';
                        }
                    echo '</div>';

                }

            ?>
        </div>
    </div>

    <!--Javascript-->
    <script src="./assets/js/example.js"></script>
</body>
<?php
    footer();
?>