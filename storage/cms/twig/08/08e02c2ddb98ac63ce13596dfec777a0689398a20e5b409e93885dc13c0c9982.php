<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\OSPanel\domains\medi-art/themes/my-theme/layouts/default.htm */
class __TwigTemplate_68a0e30f1adfff84f06b0293e9c3b7c283057de31cc3a33523c3318703850e14 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/swiper-bundle.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\">
    <link rel=\"stylesheet\" media=\"screen and (min-width:2500px)\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/max.css");
        echo "\">
    <link rel=\"stylesheet\" media=\"screen and (max-width:1440px)\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/laptop.css");
        echo "\">
    <link rel=\"stylesheet\" media=\"screen and (max-width:1024px)\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/laptopS.css");
        echo "\">
    <link rel=\"stylesheet\" media=\"screen and (max-width:768px)\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/tablet.css");
        echo "\">
    <link rel=\"stylesheet\" media=\"screen and (max-width:430px)\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/phone.css");
        echo "\">
    <title>MEDI-ART</title>
    ";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 17
        echo "</head>
<body>

    ";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "

    <div class=\"page\">
        ";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 25
        echo "    </div>


    ";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 29
        echo "    
    

    <!-- Scripts -->
    <script src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/swiper-bundle.min.js");
        echo "\"></script>
    <script src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/script.js");
        echo "\"></script>
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    
    ";
        // line 37
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 38
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 39
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\medi-art/themes/my-theme/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 39,  132 => 38,  121 => 37,  115 => 34,  111 => 33,  105 => 29,  101 => 28,  96 => 25,  94 => 24,  89 => 21,  85 => 20,  80 => 17,  77 => 16,  72 => 14,  68 => 13,  64 => 12,  60 => 11,  56 => 10,  52 => 9,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/swiper-bundle.min.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/style.css'|theme }}\">
    <link rel=\"stylesheet\" media=\"screen and (min-width:2500px)\" href=\"{{ 'assets/css/max.css'|theme }}\">
    <link rel=\"stylesheet\" media=\"screen and (max-width:1440px)\" href=\"{{ 'assets/css/laptop.css'|theme }}\">
    <link rel=\"stylesheet\" media=\"screen and (max-width:1024px)\" href=\"{{ 'assets/css/laptopS.css'|theme }}\">
    <link rel=\"stylesheet\" media=\"screen and (max-width:768px)\" href=\"{{ 'assets/css/tablet.css'|theme }}\">
    <link rel=\"stylesheet\" media=\"screen and (max-width:430px)\" href=\"{{ 'assets/css/phone.css'|theme }}\">
    <title>MEDI-ART</title>
    {% styles %}
</head>
<body>

    {% partial 'site/header' %}


    <div class=\"page\">
        {% page %}
    </div>


    {% partial 'site/footer' %}
    
    

    <!-- Scripts -->
    <script src=\"{{ 'assets/js/swiper-bundle.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/script.js'|theme }}\"></script>
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    
    {% framework extras %}
    {% scripts %}

</body>
</html>", "C:\\OSPanel\\domains\\medi-art/themes/my-theme/layouts/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("styles" => 16, "partial" => 20, "page" => 24, "framework" => 37, "scripts" => 38);
        static $filters = array("theme" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles', 'partial', 'page', 'framework', 'scripts'],
                ['theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
