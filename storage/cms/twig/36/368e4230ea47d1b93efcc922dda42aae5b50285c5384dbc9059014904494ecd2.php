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

/* C:\OSPanel\domains\medi-art/themes/my-theme/layouts/static-layout.htm */
class __TwigTemplate_29c99abcca2df8532b7f2ea2cfffbb236bcba197b39218948415d67f31b96665 extends \Twig\Template
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
    <header>
        <div class=\"navbar\">
            <div class=\"logo\">
            <img src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo.png");
        echo "\" alt=\"\">
            </div>
            <div class=\"navbar-content\">
            <div class=\"nav-top\">
                <form>
                <input type=\"text\" placeholder=\"Поиск\"  id=\"search\">
                <img src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/search.png");
        echo "\" class=\"search-logo\">
                </form>
                <div class=\"nav-btn\">
                <button class=\"btn-wh\">
                    <img src=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/eye.png");
        echo "\" class=\"btn-wh-img\">
                    для слабовидящих
                    <img src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/btn_b.png");
        echo "\">
                </button>
                <button class=\"btn-bl\">
                    Записаться на прием
                    <img src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/btn_w.png");
        echo "\">
                </button>
                </div>
                
            </div>
            <div class=\"nav-links\">
                <ul class=\"links\">
                <li><a href=\"#main\">Главная</a></li>
                <li><a href=\"#services\">Медицинские услуги</a></li>
                <li><a href=\"#\">Акции</a></li>
                <li><a href=\"#\">Цены</a></li>
                <li><a href=\"#medi-art\">О клинике</a></li>
                <li><a href=\"#doctors\">Врачи</a></li>
                <li><a href=\"#reviews\">Отзывы</a></li>
                <li><a href=\"#blog\">Блог</a></li>
                <li><a href=\"#contact\">Контакты</a></li>
            
                </ul>
                <div class=\"num\">
                <img src=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/num.png");
        echo "\" alt=\"\">
                <p>+7 (777) 955‒59‒95</p>
                </div>
            </div>
            </div>
            
        
            <div class=\"toggle\">
            <div class=\"line1\"></div>
            <div class=\"line2\"></div>
            <div class=\"line3\"></div>
            </div>
        </div>
        
        <div class=\"header\" id=\"main\">
            <div class=\"header-content\">
                <h1>Акция по гинекологии</h1>
                <p>Комплексное обследование у врача гинеколога всего за 13 500 тг.</p>
                <button><a href=\"\">Узнать подробнее</a></button>
            
            </div>
            <div class=\"lines\">
            <img src=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/w-lines.png");
        echo "\">
            </div>
            <div class=\"fix-icons\">
            <a href=\"#\"><img src=\"";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/wha.png");
        echo "\"></a>
            <a href=\"#\"><img src=\"";
        // line 83
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/ph.png");
        echo "\"></a>
            </div>
        </div>
    </header>

    <div class=\"page\">
        ";
        // line 89
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 90
        echo "    </div>


    <footer>
        <div class=\"foot-cont\">
          <div class=\"foot-head\">
            <p>ЗВОНИТЕ НАМ по всем вопросам:</p>
            <h3>+7 (777) 955-59-95</h3>
            <div class=\"foot-icon\">
              <a href=\"#\"><img src=\"";
        // line 99
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/wha.png");
        echo "\"></a>
              <a href=\"#\"><img src=\"";
        // line 100
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/ph.png");
        echo "\"></a>
            </div>
          </div>
          <div class=\"foot-info\">
            <div class=\"column\">
              <h1 class=\"title\"><a href=\"#\">Медицинские услуги</a></h1>
              <div class=\"column-links\">
                <div class=\"links\">
                  <a href=\"#\">Гинекология</a>
                  <a href=\"#\">Урология</a>
                  <a href=\"#\">Эндокринология</a>
                  <a href=\"#\">Андрология</a>          
                </div>
                <div class=\"links\">
                  <a href=\"#\">Урогинекологии</a>
                  <a href=\"#\">УЗИ диагностика</a>
                  <a href=\"#\">Физотерапия</a>
                  <a href=\"#\">Лабаратория</a>          
                </div>
              </div>
            </div>
            <div class=\"column\">
              <h1 class=\"title\"><a href=\"#\">о КЛИНИКЕ</a></h1>
              <h1 class=\"title\"><a href=\"#\">ЦЕНЫ</a></h1>
              <div class=\"links\" style=\"margin-top: 10px;\">
                <a href=\"#\">Прайс на услуги врачей</a>
                <a href=\"#\">Прайс на лабораторные <br> исследования</a>  
              </div>
            </div>
            <div class=\"column\">
              <h1 class=\"title\"><a href=\"#\">врачи</a></h1>
              <h1 class=\"title\"><a href=\"#\">отзывы</a></h1>
            </div>
            <div class=\"column\">
              <h1 class=\"title\"><a href=\"#\">Блог</a></h1>
              <div class=\"links\">
                <a href=\"#\">Статьи</a>
                <a href=\"#\">Что мы лечим</a>  
              </div>
              <h1 class=\"title\"><a href=\"#\">акции</a></h1>
            </div>
            <div class=\"column\">
              <h1 class=\"title\"><a href=\"#\">Контакты</a></h1>
              <p>г.Астана, пр. Тауельсыздик, 20/1</p>
              <h1 class=\"title\"><a href=\"#\">Время работы:</a></h1>
              <p>Пн-Пт: с 08.30 до 19.00 <br> Сб: с 08.30 до 16.00 <br> Вс: Выходной</p>
            </div>
            <button>Записаться на прием</button>
            
          </div>
          <div class=\"foot-line\"></div>
          <h2>ABC DESIGN</h2>
        </div>
    </footer>
    
    

    <!-- Scripts -->
    <script src=\"";
        // line 158
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/swiper-bundle.min.js");
        echo "\"></script>
    <script src=\"";
        // line 159
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/script.js");
        echo "\"></script>
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    
    ";
        // line 162
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
        // line 163
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 164
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\medi-art/themes/my-theme/layouts/static-layout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 164,  280 => 163,  269 => 162,  263 => 159,  259 => 158,  198 => 100,  194 => 99,  183 => 90,  181 => 89,  172 => 83,  168 => 82,  162 => 79,  137 => 57,  115 => 38,  108 => 34,  103 => 32,  96 => 28,  87 => 22,  80 => 17,  77 => 16,  72 => 14,  68 => 13,  64 => 12,  60 => 11,  56 => 10,  52 => 9,  48 => 8,  39 => 1,);
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
    <header>
        <div class=\"navbar\">
            <div class=\"logo\">
            <img src=\"{{ 'assets/img/logo.png'|theme }}\" alt=\"\">
            </div>
            <div class=\"navbar-content\">
            <div class=\"nav-top\">
                <form>
                <input type=\"text\" placeholder=\"Поиск\"  id=\"search\">
                <img src=\"{{ 'assets/img/search.png'|theme }}\" class=\"search-logo\">
                </form>
                <div class=\"nav-btn\">
                <button class=\"btn-wh\">
                    <img src=\"{{ 'assets/img/eye.png'|theme }}\" class=\"btn-wh-img\">
                    для слабовидящих
                    <img src=\"{{ 'assets/img/btn_b.png'|theme }}\">
                </button>
                <button class=\"btn-bl\">
                    Записаться на прием
                    <img src=\"{{ 'assets/img/btn_w.png'|theme }}\">
                </button>
                </div>
                
            </div>
            <div class=\"nav-links\">
                <ul class=\"links\">
                <li><a href=\"#main\">Главная</a></li>
                <li><a href=\"#services\">Медицинские услуги</a></li>
                <li><a href=\"#\">Акции</a></li>
                <li><a href=\"#\">Цены</a></li>
                <li><a href=\"#medi-art\">О клинике</a></li>
                <li><a href=\"#doctors\">Врачи</a></li>
                <li><a href=\"#reviews\">Отзывы</a></li>
                <li><a href=\"#blog\">Блог</a></li>
                <li><a href=\"#contact\">Контакты</a></li>
            
                </ul>
                <div class=\"num\">
                <img src=\"{{ 'assets/img/num.png'|theme }}\" alt=\"\">
                <p>+7 (777) 955‒59‒95</p>
                </div>
            </div>
            </div>
            
        
            <div class=\"toggle\">
            <div class=\"line1\"></div>
            <div class=\"line2\"></div>
            <div class=\"line3\"></div>
            </div>
        </div>
        
        <div class=\"header\" id=\"main\">
            <div class=\"header-content\">
                <h1>Акция по гинекологии</h1>
                <p>Комплексное обследование у врача гинеколога всего за 13 500 тг.</p>
                <button><a href=\"\">Узнать подробнее</a></button>
            
            </div>
            <div class=\"lines\">
            <img src=\"{{ 'assets/img/w-lines.png'|theme }}\">
            </div>
            <div class=\"fix-icons\">
            <a href=\"#\"><img src=\"{{ 'assets/img/wha.png'|theme }}\"></a>
            <a href=\"#\"><img src=\"{{ 'assets/img/ph.png'|theme }}\"></a>
            </div>
        </div>
    </header>

    <div class=\"page\">
        {% page %}
    </div>


    <footer>
        <div class=\"foot-cont\">
          <div class=\"foot-head\">
            <p>ЗВОНИТЕ НАМ по всем вопросам:</p>
            <h3>+7 (777) 955-59-95</h3>
            <div class=\"foot-icon\">
              <a href=\"#\"><img src=\"{{ 'assets/img/wha.png'|theme }}\"></a>
              <a href=\"#\"><img src=\"{{ 'assets/img/ph.png'|theme }}\"></a>
            </div>
          </div>
          <div class=\"foot-info\">
            <div class=\"column\">
              <h1 class=\"title\"><a href=\"#\">Медицинские услуги</a></h1>
              <div class=\"column-links\">
                <div class=\"links\">
                  <a href=\"#\">Гинекология</a>
                  <a href=\"#\">Урология</a>
                  <a href=\"#\">Эндокринология</a>
                  <a href=\"#\">Андрология</a>          
                </div>
                <div class=\"links\">
                  <a href=\"#\">Урогинекологии</a>
                  <a href=\"#\">УЗИ диагностика</a>
                  <a href=\"#\">Физотерапия</a>
                  <a href=\"#\">Лабаратория</a>          
                </div>
              </div>
            </div>
            <div class=\"column\">
              <h1 class=\"title\"><a href=\"#\">о КЛИНИКЕ</a></h1>
              <h1 class=\"title\"><a href=\"#\">ЦЕНЫ</a></h1>
              <div class=\"links\" style=\"margin-top: 10px;\">
                <a href=\"#\">Прайс на услуги врачей</a>
                <a href=\"#\">Прайс на лабораторные <br> исследования</a>  
              </div>
            </div>
            <div class=\"column\">
              <h1 class=\"title\"><a href=\"#\">врачи</a></h1>
              <h1 class=\"title\"><a href=\"#\">отзывы</a></h1>
            </div>
            <div class=\"column\">
              <h1 class=\"title\"><a href=\"#\">Блог</a></h1>
              <div class=\"links\">
                <a href=\"#\">Статьи</a>
                <a href=\"#\">Что мы лечим</a>  
              </div>
              <h1 class=\"title\"><a href=\"#\">акции</a></h1>
            </div>
            <div class=\"column\">
              <h1 class=\"title\"><a href=\"#\">Контакты</a></h1>
              <p>г.Астана, пр. Тауельсыздик, 20/1</p>
              <h1 class=\"title\"><a href=\"#\">Время работы:</a></h1>
              <p>Пн-Пт: с 08.30 до 19.00 <br> Сб: с 08.30 до 16.00 <br> Вс: Выходной</p>
            </div>
            <button>Записаться на прием</button>
            
          </div>
          <div class=\"foot-line\"></div>
          <h2>ABC DESIGN</h2>
        </div>
    </footer>
    
    

    <!-- Scripts -->
    <script src=\"{{ 'assets/js/swiper-bundle.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/script.js'|theme }}\"></script>
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    
    {% framework extras %}
    {% scripts %}

</body>
</html>", "C:\\OSPanel\\domains\\medi-art/themes/my-theme/layouts/static-layout.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("styles" => 16, "page" => 89, "framework" => 162, "scripts" => 163);
        static $filters = array("theme" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles', 'page', 'framework', 'scripts'],
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
