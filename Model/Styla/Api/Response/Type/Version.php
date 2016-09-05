<?php
namespace Styla\Connect2\Model\Styla\Api\Response\Type;

class Version extends \Styla\Connect2\Model\Styla\Api\Response\Type\AbstractType
{
    /**
     * 
     * @return string
     * @throws \Exception
     */
    public function getResult()
    {
        try {
            $result = parent::getResult();
        } catch (\Exception $e) {
            $result = '1';
        }

        return $result;
    }
}