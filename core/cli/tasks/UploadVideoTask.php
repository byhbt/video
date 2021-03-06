<?php
/**
 * Phanbook : Delightfully simple forum software
 *
 * Licensed under The GNU License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @link    http://phanbook.com Phanbook Project
 * @since   1.0.0
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt
 */
namespace Phanbook\Cli\Tasks;

use Phalcon\CLI\Task;
use Phanbook\Queue\UploadVideo;
use Phanbook\Tools\Cli\Output;

class UploadVideoTask extends Task
{
    public function mainAction()
    {
        Output::stdout('Send a video to amazon s3');
        $video = new UploadVideo();
        try {
            var_dump($video->perform());
        } catch (Exception $e) {
            echo $e->getMessage(), PHP_EOL;
            echo $e->getTraceAsString();
        }

    }
}
