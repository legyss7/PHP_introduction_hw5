<?php 

namespace Geekbrains\Application1\Controllers;

use Geekbrains\Application1\Models\SiteInfo;
use Geekbrains\Application1\Render;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class InfoController {

    public function actionIndex(): string {
        $siteInfo = new SiteInfo();
        // $info = $siteInfo->getInfo();
        $render = new Render();
        // return $render->renderPage('site-info.twig', $info);
        
        // return $render->renderPage('site-info.twig', [
        //     'server' => $info['server'],
        //     'phpVersion' => $info['phpVersion'],
        //     'userAgent' => $info['userAgent']
        // ]);

        return $render->renderPage('site-info.twig', [
            'server' => $siteInfo->getWebServer(),
            'phpVersion' => $siteInfo->getPhpVersion(),
            'userAgent' => $siteInfo->getUserAgent()
        ]);
    }
}