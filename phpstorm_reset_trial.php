<?php

/*
 * PhpStorm Reset Trial script
 *
 * (Tested on PhpStorm version 2018.2.2)
 *
 * Just run this script as follow (correct path to PhpStorm installation dir if needed):
 *
 *      php phpstorm_reset_trail.php "C:\Program Files\JetBrains\PhpStorm 2018.2.2"
 *
 * This script automates the job you can do manually. To reset trial period, you need:
 *
 *     1. To hide traces of prior PhpStorm use (make backup of config)
 *     2. Run PhpStorm as first time and start new evaluation period
 *     3. Exit PhpStorm
 *     4. Restore old config by merging it with saving of new evaluation key and some stuff
 *
 * This script will guide you along this path and will do the main job for you. When started, script will not do any
 * changes in your system immediately. It will ask your confirmations before performing any change. No one change will
 * be made without your understanding of it before. Typically the script output with user dialog looks as follow:
 *
 * ```
 * PhpStorm Reset Trial
 * ====================
 *
 * This utility will reset trail period of your PhpStorm installation with saving its settings.
 *
 * Config directory should be in "C:/ProgramData/JetBrains/PhpStorm/config"
 * Backup directory will be in "C:/ProgramData/JetBrains/PhpStorm/backup"
 *
 * Want to continue? (y/n) [no] y
 * Backup folder already exists and it's not empty, need to clean it before continue. OK? (y/n) [yes] y
 * Cleaning backup folder ... OK
 * Move config folder to backup. PhpStorm must be closed. Are you ready? (y/n) [no] y
 * Moving config folder to backup ... OK
 * Remove Registry key "HKEY_CURRENT_USER\SOFTWARE\JavaSoft\Prefs\jetbrains\phpstorm". Continue? (y/n) [no] y
 * Deleting Registry ket ... OK
 * Now start PhpStorm and do the following things:
 *  - Select (*) Do not import anything -> Press [OK]
 *  - Press [Skip Remaining and Set Defaults]
 *  - Select (*) Evaluate for free -> Press [Evaluate]
 *  - Exit PhpStorm
 *
 * Did it? (y/n) [no] y
 * Merging old options/options.xml with new one ... OK
 * Copying all other config files back from backup ... OK
 *
 * All is done. Now you can start PhpStorm and continue to use it yet another 30 days! :)
 * ```
 *
 * If you will abort script execution in the middle of work or some error will occur -- the script will offer to
 * revert all changes made. And if you'll agree, it will revert step-by-step with confirmations.
 */

require_once 'vendor/autoload.php';

\App\PhpstormResetTrial::main();

