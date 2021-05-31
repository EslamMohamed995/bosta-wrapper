<?php
//declare (strict_types = 1);

//echo 'asd';die;
namespace Islam;
/*
use Bosta\Bosta;
use Bosta\Utils\DropOffAddress;*/


class Subaccount
{
    /**
     * Create SubAccount Instance
     *
     * @param \Bosta\Bosta $bosta
     */
    public function __construct(/*Bosta $bosta*/)
    {
        echo 'ddddddddddddd';die;
        //$this->bosta = $bosta;
    }

    /**
     * Create SubAccount
     *
     * @param string $name;
     * @param string $phone;
     * @param \Bosta\Utils\DropOffAddress $address
     * @return \stdClass
     */
    /*public function create(
        string $name,
        string $phone,
        DropOffAddress $adress
        
    ): \stdClass {
        try {
            $path = 'business-subaccounts';
            $body = new \stdClass();
            
            $body->name = $name;
            
            $body->phone = $phone;
            $body->address = $adress->dropOffAddress;

            $response = $this->bosta->send('POST', $path, $body, '');
            if ($response && $response->success === true) {
                return $response->data;
            } elseif ($response->success === false) {
                throw new \Exception($response->message);
            }
        } catch (\Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";die;
            return $e;
        }
    }

    /**
     * Update SubAccount
     *
     * @param string $name;
     * @param string $phone;
     * @param \Bosta\Utils\DropOffAddress $address
     * @return \stdClass
     * 
     */
    /*public function update(
        string $subAccountId,
        string $name,
        string $phone,
        DropOffAddress $adress
    ): string {
        try {
            $path = 'business-subaccounts/' . $subAccountId;

            $body = new \stdClass();
            $body->name = $name;
            $body->phone = $phone;
            $body->address = $adress->dropOffAddress;

            $response = $this->bosta->send('PUT', $path, $body, '');

            if ($response->success === true) {
                return $response->message;
            } elseif ($response->success === false) {
                throw new \Exception($response->message);
            }
        } catch (\Exception $e) {
            return $e;
        }
    }

    /**
     * Delete SubAccount
     *
     * @param string $subAccountId
     * @return void
     */
    /*public function delete(string $subAccountId)
    {
        try {
            $path = 'business-subaccounts/' . $subAccountId;
            $response = $this->bosta->send('DELETE', $path, new \stdClass, '');

            if ($response->success === true) {
                return $response->message;
            } elseif ($response->success === false) {
                throw new \Exception($response->message);
            }
        } catch (\Exception $e) {
            return $e;
        }
    }

    /**
     * List SubAccounts
     *
     * @param int $pageNumber
     * @param int $pageLimit
     * @return \stdClass
     */
    /*public function list(int $pageNumber = 0, int $pageLimit = 50): \stdClass
    {
        try {
            $path = 'business-subaccounts?pageNumber=' . $pageNumber . '&pageLimit=' . $pageLimit;
            $response = $this->bosta->send('GET', $path, new \stdClass, '');

            if ($response->success === true) {
                return $response->data;
            } elseif ($response->success === false) {
                throw new \Exception($response->message);
            }
        } catch (\Exception $e) {
            return $e;
        }
    }

    /**
     * get SubAccount
     *
     * @param string $subAccountId
     * @return \stdClass
     */
    /*public function get(string $subAccountId): \stdClass
    {
        try {
            $path = 'business-subaccounts/' . $subAccountId;
            $response = $this->bosta->send('GET', $path, new \stdClass, '');

            if ($response->success === true) {
                return $response->data;
            } elseif ($response->success === false) {
                throw new \Exception($response->message);
            }
        } catch (\Exception $e) {
            return $e;
        }
    }*/
}
