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

/* C:\OSPanel\domains\medi-art/themes/my-theme/partials/reviews.htm */
class __TwigTemplate_926542e4ba326ab62b3b65851a4eea7d4e71ebd318d8534cc94941a759b7d493 extends \Twig\Template
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
        echo "<div class=\"our_reviews\" id=\"reviews\">
    <div class=\"rev-cont\">
      <div class=\"title\">
        <h1>Отзывы наших пациентов</h1>
        <div class=\"title-line\"></div>
      </div>
      <div class=\"reviews\">
        <div class=\"review\">
          <div class=\"ava-img\"></div>
          <h1>Гульжан. 35 лет</h1>
          <p>Мини-описание. Это текст о компании. Он необходим для дальнейшего продвижения Вашего сайта. Вам будет необходимо предоставить исходные данные, по которым наши копирайтеры составят правильный текст, который будет содержать в себе информацию о деятельности компании.
            Мини-описание. Это текст о компании. Он необходим для дальнейшего продвижения Вашего сайта. Вам будет необходимо предоставить исходные данные.</p>
        </div>
        <div class=\"review\">
          <div class=\"ava-img\"></div>
          <h1>Гульжан. 35 лет</h1>
          <p>Мини-описание. Это текст о компании. Он необходим для дальнейшего продвижения Вашего сайта. Вам будет необходимо предоставить исходные данные, по которым наши копирайтеры составят правильный текст, который будет содержать в себе информацию о деятельности компании.
            Мини-описание. Это текст о компании. Он необходим для дальнейшего продвижения Вашего сайта. Вам будет необходимо предоставить исходные данные.</p>
        </div>
        <div class=\"review last-rev\">
          <div class=\"ava-img\"></div>
          <h1>Гульжан. 35 лет</h1>
          <p>Мини-описание. Это текст о компании. Он необходим для дальнейшего продвижения Вашего сайта. Вам будет необходимо предоставить исходные данные, по которым наши копирайтеры составят правильный текст, который будет содержать в себе информацию о деятельности компании.
            Мини-описание. Это текст о компании. Он необходим для дальнейшего продвижения Вашего сайта.</p>
        </div>
        <a href=\"#\" class=\"doc-more rev-more\">
          <button><img src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/downbl.png");
        echo "\"></button>
          смотреть <br> все отзывы
        </a>
      </div>
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\medi-art/themes/my-theme/partials/reviews.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 27,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"our_reviews\" id=\"reviews\">
    <div class=\"rev-cont\">
      <div class=\"title\">
        <h1>Отзывы наших пациентов</h1>
        <div class=\"title-line\"></div>
      </div>
      <div class=\"reviews\">
        <div class=\"review\">
          <div class=\"ava-img\"></div>
          <h1>Гульжан. 35 лет</h1>
          <p>Мини-описание. Это текст о компании. Он необходим для дальнейшего продвижения Вашего сайта. Вам будет необходимо предоставить исходные данные, по которым наши копирайтеры составят правильный текст, который будет содержать в себе информацию о деятельности компании.
            Мини-описание. Это текст о компании. Он необходим для дальнейшего продвижения Вашего сайта. Вам будет необходимо предоставить исходные данные.</p>
        </div>
        <div class=\"review\">
          <div class=\"ava-img\"></div>
          <h1>Гульжан. 35 лет</h1>
          <p>Мини-описание. Это текст о компании. Он необходим для дальнейшего продвижения Вашего сайта. Вам будет необходимо предоставить исходные данные, по которым наши копирайтеры составят правильный текст, который будет содержать в себе информацию о деятельности компании.
            Мини-описание. Это текст о компании. Он необходим для дальнейшего продвижения Вашего сайта. Вам будет необходимо предоставить исходные данные.</p>
        </div>
        <div class=\"review last-rev\">
          <div class=\"ava-img\"></div>
          <h1>Гульжан. 35 лет</h1>
          <p>Мини-описание. Это текст о компании. Он необходим для дальнейшего продвижения Вашего сайта. Вам будет необходимо предоставить исходные данные, по которым наши копирайтеры составят правильный текст, который будет содержать в себе информацию о деятельности компании.
            Мини-описание. Это текст о компании. Он необходим для дальнейшего продвижения Вашего сайта.</p>
        </div>
        <a href=\"#\" class=\"doc-more rev-more\">
          <button><img src=\"{{ 'assets/img/downbl.png'|theme }}\"></button>
          смотреть <br> все отзывы
        </a>
      </div>
    </div>
  </div>", "C:\\OSPanel\\domains\\medi-art/themes/my-theme/partials/reviews.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 27);
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
