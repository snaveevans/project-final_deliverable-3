<?php
/**
 * File name: UserRespositoryInterface.php
 * Project: project-final_deliverable-1
 * PHP version 5
 * @category  PHP
 * @package   Notes\Domain\Entity
 * @author    donbstringham <donbstringham@gmail.com>
 * @copyright 2015 © donbstringham
 * @license   http://opensource.org/licenses/MIT MIT
 * @version   GIT: <git_id>
 * @link      http://donbstringham.us
 * $LastChangedDate$
 * $LastChangedBy$
 */

namespace Notes\Domain\Entity;

interface UserRepositoryInterface
{
    /**
     * @param \Notes\Domain\Entity\User $user
     * @return mixed
     */
    public function add(User $user);

    /**
     * @return int
     */
    public function count();

    /**
     * @param $username
     * @return mixed
     */
    public function getById(Uuid $uuid);

    /**
     * @return mixed
     */
    public function getUsers();

    /**
     * @param \Notes\Domain\Entity\User $user
     * @return mixed
     */
    public function modifyById(Uuid $uuid, User $user);

    /**
     * @param $username
     * @return mixed
     */
    public function removeById(Uuid $uuid);
}
