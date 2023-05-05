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

/* C:\OSPanel\domains\medi-art/themes/my-theme/partials/site/header.htm */
class __TwigTemplate_736a675eacf48c35e86a893aeddbf65171ee5a5ba697aebbaa8c6dae0e0ef27e extends \Twig\Template
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
        echo "<header>
    <div class=\"navbar\">
        <div class=\"logo\">
          <img src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo.png");
        echo "\" alt=\"\">
        </div>
        <div class=\"navbar-content\">
          <div class=\"nav-top\">
            <form>
              <input type=\"text\" placeholder=\"Поиск\"  id=\"search\">
              <img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/search.png");
        echo "\" class=\"search-logo\">
            </form>
            <div class=\"nav-btn\">
              <button class=\"btn-wh\">
                <img src=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/eye.png");
        echo "\" class=\"btn-wh-img\">
                для слабовидящих
                <img src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/btn_b.png");
        echo "\">
              </button>
              <button class=\"btn-bl\">
                Записаться на прием
                <img src=\"";
        // line 20
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
        // line 39
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
          ";
        // line 55
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "intro/title.htm"        ;
        $context['__cms_component_params']['fixture'] = "h1"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 56
        echo "          
          ";
        // line 57
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "intro/subtitle.htm"        ;
        $context['__cms_component_params']['fixture'] = "p"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 58
        echo "          <button><a href=\"\">Узнать подробнее</a></button>
          
        </div>
        <div class=\"lines\">
          <img src=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/w-lines.png");
        echo "\">
        </div>
        <div class=\"fix-icons\">
          <a href=\"#\"><img src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/wha.png");
        echo "\"></a>
          <a href=\"#\"><img src=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/ph.png");
        echo "\"></a>
        </div>
      </div>
</header>";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\medi-art/themes/my-theme/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 66,  140 => 65,  134 => 62,  128 => 58,  122 => 57,  119 => 56,  113 => 55,  94 => 39,  72 => 20,  65 => 16,  60 => 14,  53 => 10,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
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
          {% component 'contenteditor' file=\"intro/title.htm\" fixture=\"h1\" %}
          
          {% component 'contenteditor' file=\"intro/subtitle.htm\" fixture=\"p\" %}
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
</header>", "C:\\OSPanel\\domains\\medi-art/themes/my-theme/partials/site/header.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 55);
        static $filters = array("theme" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
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
