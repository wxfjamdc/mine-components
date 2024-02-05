<?php
/**
 * MineAdmin is committed to providing solutions for quickly building web applications
 * Please view the LICENSE file that was distributed with this source code,
 * For the full copyright and license information.
 * Thank you very much for using MineAdmin.
 *
 * @Author X.Mo<root@imoi.cn>
 * @Link   https://gitee.com/xmo/MineAdmin
 */

declare(strict_types=1);
/**
 * This file is part of MineAdmin.
 *
 * @link     https://www.mineadmin.com
 * @document https://doc.mineadmin.com
 * @contact  root@imoi.cn
 * @license  https://github.com/mineadmin/MineAdmin/blob/master/LICENSE
 */

namespace Mine\Command;

use Hyperf\Command\Annotation\Command;
use Mine\MineCommand;

/**
 * Class MineAdmin.
 */
#[Command]
class MineAdmin extends MineCommand
{
    protected ?string $name = 'mine';

    public function configure()
    {
        parent::configure(); // TODO: Change the autogenerated stub
    }

    /**
     * Handle the current command.
     */
    public function handle()
    {
        $result = shell_exec('php ' . BASE_PATH . '/bin/hyperf.php | grep mine');
        $this->line($this->getInfo(), 'comment');
        $this->line(preg_replace('/\s+mine\s+/', '', $result), 'info');
    }
}