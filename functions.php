<?php
/**
 * Функция шаблонизатор
 * @param string $name - имя файла для переданного шаблона
 * @param array $data - массив входных данных для генерации шаблона
 * @return string $result - HTML строка с генерированными данными из переданного массива
 */
function include_template($name, $data)
{
    $name = 'templates/' . $name;
    if (!is_readable($name)) {
        return '';
    }
    ob_start();
    extract($data);
    require $name;
    return ob_get_clean();
}

/**
 * Функция получения отформатированной даты
 * @param int $priceValue - цена товара
 * @return string $fullFormattedPrice - HTML строка с ценой товара
 */
function getFormattedPrice($priceValue)
{
    $intPart = ceil($priceValue);
    $stringRepresentation = (string) $intPart;
    if ($intPart < 1000) {
        $fullFormattedPrice = $stringRepresentation . ' ₽';
        return $fullFormattedPrice;
    } elseif ($intPart > 1000) {
        $begingPart = substr($stringRepresentation, 0, -3);
        $endPart = substr($stringRepresentation, -3, 3);
        $fullFormattedPrice = $begingPart . ' ' . $endPart . ' ₽';
        return $fullFormattedPrice;
    }
}

/**
 * Функция вычисления времени до конца акции
 * @return string - итоговая строка в формате HH:MM
 */
function getStockTime()
{
    $end_stock = strtotime('24:00');
    $result_hours = (string)(floor(($end_stock - time()) / 3600));
    $result_minutes = (string)(floor((($end_stock - time()) % 3600) / 60));
    return $result_hours . ' : ' . $result_minutes;
}
