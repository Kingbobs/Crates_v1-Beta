# Crates_v1-Beta


## Help PLz

##Errors
[00:08:34] [Server thread/CRITICAL]: Error: "Call to a member function setExecutor() on null" (EXCEPTION) in "plugins/Crates_v1-Beta_dev-20.phar/src/crates/Main" at line 93
[00:08:34] [Server thread/DEBUG]: #0 src/pocketmine/plugin/PluginBase(116): crates\Main->onEnable()
[00:08:34] [Server thread/DEBUG]: #1 src/pocketmine/plugin/PluginManager(552): pocketmine\plugin\PluginBase->setEnabled(boolean 1)
[00:08:34] [Server thread/DEBUG]: #2 src/pocketmine/Server(1784): pocketmine\plugin\PluginManager->enablePlugin(object crates\Main)
[00:08:34] [Server thread/DEBUG]: #3 src/pocketmine/Server(1770): pocketmine\Server->enablePlugin(object crates\Main)
[00:08:34] [Server thread/DEBUG]: #4 src/pocketmine/Server(1583): pocketmine\Server->enablePlugins(integer 1)
[00:08:34] [Server thread/DEBUG]: #5 src/pocketmine/PocketMine(273): pocketmine\Server->__construct(object BaseClassLoader, object pocketmine\utils\MainLogger, string[16] /home/container/, string[24] /home/container/plugins/)
[00:08:34] [Server thread/DEBUG]: #6 src/pocketmine/PocketMine(296): pocketmine\server()
[00:08:34] [Server thread/DEBUG]: #7 (11): require(string[71] phar:///home/container/PocketMine-MP.phar/src/pocketmine/PocketMine.php)
[00:08:34] [Server thread/INFO]: Disabling Crates_v1-Beta v1.0.0
[00:08:34] [Server thread/CRITICAL]: Error: "Call to a member function close() on null" (EXCEPTION) in "plugins/Crates_v1-Beta_dev-20.phar/src/crates/Main" at line 112
[00:08:34] [Server thread/DEBUG]: #0 src/pocketmine/plugin/PluginBase(118): crates\Main->onDisable()
[00:08:34] [Server thread/DEBUG]: #1 src/pocketmine/plugin/PluginManager(639): pocketmine\plugin\PluginBase->setEnabled(boolean )
[00:08:34] [Server thread/DEBUG]: #2 src/pocketmine/plugin/PluginManager(559): pocketmine\plugin\PluginManager->disablePlugin(object crates\Main)
[00:08:34] [Server thread/DEBUG]: #3 src/pocketmine/Server(1784): pocketmine\plugin\PluginManager->enablePlugin(object crates\Main)
[00:08:34] [Server thread/DEBUG]: #4 src/pocketmine/Server(1770): pocketmine\Server->enablePlugin(object crates\Main)
[00:08:34] [Server thread/DEBUG]: #5 src/pocketmine/Server(1583): pocketmine\Server->enablePlugins(integer 1)
[00:08:34] [Server thread/DEBUG]: #6 src/pocketmine/PocketMine(273): pocketmine\Server->__construct(object BaseClassLoader, object pocketmine\utils\MainLogger, string[16] /home/container/, string[24] /home/container/plugins/)
[00:08:34] [Server thread/DEBUG]: #7 src/pocketmine/PocketMine(296): pocketmine\server()
[00:08:34] [Server thread/DEBUG]: #8 (11): require(string[71] phar:///home/container/PocketMine-MP.phar/src/pocketmine/PocketMine.php)
