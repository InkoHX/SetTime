<?php
/**
 * Created by PhpStorm.
 * User: InkoHX
 * Date: 2018/04/07
 * Time: 14:17
 */
namespace SetTime;
class Main extends \pocketmine\plugin\PluginBase implements \pocketmine\event\Listener
{
    public function onEnable()
    {
        date_default_timezone_set("Asia/Tokyo");
    }
}
