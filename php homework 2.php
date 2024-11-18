class TemperatureStats {
    private $highTemps;

    public function __construct($highTemps) {
        $this->highTemps = $highTemps;
    }

    public function calculateAverage() {
        $total = array_sum($this->highTemps);
        $count = count($this->highTemps);
        return $count > 0 ? $total / $count : 0;
    }

    public function getTopFiveWarmest() {
        rsort($this->highTemps);
        return array_slice($this->highTemps, 0, 5);
    }

    public function getTopFiveColdest() {
        sort($this->highTemps);
        return array_slice($this->highTemps, 0, 5);
    }
}

// Данные температура
$highTemps = array(
    68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 
    73, 58, 63, 79, 78, 68, 72, 73, 80, 79, 
    68, 72, 75, 77, 73, 78, 82, 85, 89, 83
);

// Создаем экземпляр класса
$tempStats = new TemperatureStats($highTemps);

// Вычисляем среднюю высокую температуру
$average = $tempStats->calculateAverage();
echo "Средняя высокая температура: " . round($average, 2) . "°F<br>";

// Выводим пять самых теплых высоких температур
$topFiveWarmest = $tempStats->getTopFiveWarmest();
echo "Пять самых теплых высоких температур: " . implode(", ", $topFiveWarmest) . "°F<br>";

// Выводим пять самых низких высоких температур
$topFiveColdest = $tempStats->getTopFiveColdest();
echo "Пять самых низких высоких температур: " . implode(", ", $topFiveColdest) . "°F<br>";
?>
