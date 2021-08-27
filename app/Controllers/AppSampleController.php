<?php

namespace PhpHunter\Framework\App\Controllers;

use PhpHunter\Kernel\Controllers\ResponseController;
use PhpHunter\Kernel\Abstractions\ParametersAbstract;

class AppSampleController extends ParametersAbstract
{
    private object $response;

    /**
     * @description Constructor Class
    */
    public function __construct()
    {
        $this->response = new ResponseController();
    }

    /**
     * @description Static Sample
     * @param array $params #Optional
     */
    public static function staticSample(array $params = []): void
    {
        $response = new ResponseController();
        $response->jsonResponse([
            "params" => $params,
            "message" => "Static Sample is OK",
        ], 200);
    }

    /**
     * @description Create Sample
     */
    public function createSample(): bool
    {
        $this->response->jsonResponse([
            "params" => $this->getParams(),
            "message" => "Create Sample is OK",
        ], 200);
        return true;
    }

    /**
     * @description CreateId Sample
     */
    public function createIdSample(): bool
    {
        $this->response->jsonResponse([
            "params" => $this->getParams(),
            "message" => "Create Id Sample is OK",
            ], 200);
        return true;
    }

    /**
     * @description create User Sample
     */
    public function createUserSample(): bool
    {
        $this->response->jsonResponse([
            "params" => $this->getParams(),
            "message" => "create User Sample Sample is OK",
        ], 200);
        return true;
    }

    /**
     * @description Read Sample
     */
    public function readSample(): bool
    {
        $this->response->jsonResponse([
            "params" => $this->getParams(),
            "message" => "Read Sample is OK",
        ], 200);
        return true;
    }

    /**
     * @description ReadId Sample
     */
    public function readIdSample(): bool
    {
        $this->response->jsonResponse([
            "params" => $this->getParams(),
            "message" => "ReadId Sample is OK",
        ], 200);
        return true;
    }

    /**
     * @description Update Sample
     */
    public function updateSample(): bool
    {
        $this->response->jsonResponse([
            "params" => $this->getParams(),
            "message" => "Update Sample is OK",
        ], 200);
        return true;
    }

    /**
     * @description UpdateId Sample
     */
    public function updateIdSample(): bool
    {
        $this->response->jsonResponse([
            "params" => $this->getParams(),
            "message" => "UpdateId Sample is OK",
        ], 200);
        return true;
    }

    /**
     * @description Delete Sample
     */
    public function deleteSample(): bool
    {
        $this->response->jsonResponse([
            "params" => $this->getParams(),
            "message" => "Delete Sample is OK",
        ], 200);
        return true;
    }

    /**
     * @description DeleteId Sample
     */
    public function deleteIdSample(): bool
    {
        $this->response->jsonResponse([
            "params" => $this->getParams(),
            "message" => "DeleteId Sample is OK",
        ], 200);
        return true;
    }

    /**
     * @description Patch Sample
     */
    public function patchSample(): bool
    {
        $this->response->jsonResponse([
            "params" => $this->getParams(),
            "message" => "Patch Sample is OK",
        ], 200);
        return true;
    }

    /**
     * @description PatchId Sample
     */
    public function patchIdSample(): bool
    {
        $this->response->jsonResponse([
            "params" => $this->getParams(),
            "message" => "PatchId Sample is OK",
        ], 200);
        return true;
    }
}