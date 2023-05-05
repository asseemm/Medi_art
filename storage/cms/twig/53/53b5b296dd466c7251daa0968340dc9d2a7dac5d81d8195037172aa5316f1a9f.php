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

/* C:\OSPanel\domains\medi-art/themes/my-theme/partials/site/footer.htm */
class __TwigTemplate_5ce476efc82692174e6261426ff8d84a4cb09389b1bef7783dd64defc3c776ad extends \Twig\Template
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
        echo "<footer>
    <div class=\"foot-cont\">
      <div class=\"foot-head\">
        <p>ЗВОНИТЕ НАМ по всем вопросам:</p>
        <h3>+7 (777) 955-59-95</h3>
        <div class=\"foot-icon\">
          <a href=\"#\"><img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/wha.png");
        echo "\"></a>
          <a href=\"#\"><img src=\"";
        // line 8
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
</footer>";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\medi-art/themes/my-theme/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 8,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer>
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
</footer>", "C:\\OSPanel\\domains\\medi-art/themes/my-theme/partials/site/footer.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 7);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
