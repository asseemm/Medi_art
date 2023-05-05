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

/* C:\OSPanel\domains\medi-art/themes/my-theme/partials/med-doctors.htm */
class __TwigTemplate_3e251ee32ea634622376c5c4c10ce014e93c86d5dd060d1105f8c547efcd5fb5 extends \Twig\Template
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
        echo "<div class=\"med-doctors\" id=\"doctors\">
    <div class=\"med-doc-cont\">
      <div class=\"title\">
        <h1>врачи мед центра</h1>
        <div class=\"title-line\"></div>
      </div>
      <div class=\"doc-cards\">
        <div class=\"doc-card\">
          <div class=\"doc-img\"></div>
          <div class=\"doc-info\">
            <h1>Давранов Анвар</h1>
            <h2>Врач уролог, онколог-уролог, онколог-дерматолог доктор PhD, к.м.н.</h2>
            <div class=\"line\"></div>
            <h3>График работы:</h3>
            <p>Вт, Ср, Чт — с 16.00 до 18.00, Сб — с 11.00 до 16.00</p>
          </div>
        </div>
        <div class=\"doc-card\">
          <div class=\"doc-img doc-wo\"></div>
          <div class=\"doc-info\">
            <h1>Мукашева Сауле</h1>
            <h2>Гинеколог высшей категории</h2>
            <div class=\"line\"></div>
            <h3>График работы:</h3>
            <p>Пн-ПТ - с 14.00 до 18.00, Сб - с 09.00 до 15.00</p>
          </div>
        </div>
        <a href=\"#\" class=\"doc-more\">
          <button><img src=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/downbl.png");
        echo "\"></button>
          смотреть <br> всех врачей
        </a>
      </div>
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\medi-art/themes/my-theme/partials/med-doctors.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 29,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"med-doctors\" id=\"doctors\">
    <div class=\"med-doc-cont\">
      <div class=\"title\">
        <h1>врачи мед центра</h1>
        <div class=\"title-line\"></div>
      </div>
      <div class=\"doc-cards\">
        <div class=\"doc-card\">
          <div class=\"doc-img\"></div>
          <div class=\"doc-info\">
            <h1>Давранов Анвар</h1>
            <h2>Врач уролог, онколог-уролог, онколог-дерматолог доктор PhD, к.м.н.</h2>
            <div class=\"line\"></div>
            <h3>График работы:</h3>
            <p>Вт, Ср, Чт — с 16.00 до 18.00, Сб — с 11.00 до 16.00</p>
          </div>
        </div>
        <div class=\"doc-card\">
          <div class=\"doc-img doc-wo\"></div>
          <div class=\"doc-info\">
            <h1>Мукашева Сауле</h1>
            <h2>Гинеколог высшей категории</h2>
            <div class=\"line\"></div>
            <h3>График работы:</h3>
            <p>Пн-ПТ - с 14.00 до 18.00, Сб - с 09.00 до 15.00</p>
          </div>
        </div>
        <a href=\"#\" class=\"doc-more\">
          <button><img src=\"{{ 'assets/img/downbl.png'|theme }}\"></button>
          смотреть <br> всех врачей
        </a>
      </div>
    </div>
  </div>", "C:\\OSPanel\\domains\\medi-art/themes/my-theme/partials/med-doctors.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 29);
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
