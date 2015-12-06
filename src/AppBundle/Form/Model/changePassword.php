<?php

namespace AppBundle\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\Validator\Constraints as SecurityAssert;


class ChangePassword
{
    /**
     * @SecurityAssert\UserPassword(
     *     message = "Podane przez Ciebie obecne hasło jest nieprawidłowe."
     * )
     */
    protected $oldPassword;
    protected $newPassword;

    public function getOldPassword()
    {
        return $this->oldPassword;
    }

    public function setOldPassword($oldPassword)
    {
        $this->oldPassword = $oldPassword;
    }

    public function setNewPassword($newPassword)
    {
        $this->newPassword = $newPassword;
    }

    public function getNewPassword()
    {
        return $this->newPassword;
    }


}