<?php
 
namespace Commerce\WeatherForecast\Block;
 
use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;
 
class GetWeather extends Template implements BlockInterface
{
    protected $_template = "widget/sample.phtml";
}