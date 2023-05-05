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

/* C:\OSPanel\domains\medi-art/themes/my-theme/partials/med-branches.htm */
class __TwigTemplate_8ce1533f02e5c200f2844c1ee0b4439fe921c59cd45e502c7d9e72f312a32917 extends \Twig\Template
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
        echo "<div class=\"med-branches\">
    <div class=\"med-branch-cont\">
      <div class=\"title\">
        <h1>Отделения мед центра</h1>
        <div class=\"title-line\"></div>
      </div>
      <div class=\"branches\">
        <div class=\"branch\">
          <div class=\"img-box br1\"></div>
          <button><img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/down2.png");
        echo "\"></button>
          <h2>Гинекология</h2>
          <div class=\"title-line\"></div>
        </div>
        <div class=\"branch\">
          <div class=\"img-box br2\"></div>
          <button><img src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/down2.png");
        echo "\"></button>
          <h2>Урология</h2>
          <div class=\"title-line\"></div>
        </div>
        <div class=\"branch\">
          <div class=\"img-box br3\"></div>
          <button><img src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/down2.png");
        echo "\"></button>
          <h2>Эндокринология</h2>
          <div class=\"title-line\"></div>
        </div>
        <div class=\"branch\">
          <div class=\"img-box br4\"></div>
          <button><img src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/down2.png");
        echo "\"></button>
          <h2>УЗИ диагностика</h2>
          <div class=\"title-line\"></div>
        </div>
      </div>
      <div class=\"med-lines\">
        <img src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/lines.png");
        echo "\" alt=\"\">
      </div>
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\medi-art/themes/my-theme/partials/med-branches.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 34,  77 => 28,  68 => 22,  59 => 16,  50 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"med-branches\">
    <div class=\"med-branch-cont\">
      <div class=\"title\">
        <h1>Отделения мед центра</h1>
        <div class=\"title-line\"></div>
      </div>
      <div class=\"branches\">
        <div class=\"branch\">
          <div class=\"img-box br1\"></div>
          <button><img src=\"{{ 'assets/img/down2.png'|theme }}\"></button>
          <h2>Гинекология</h2>
          <div class=\"title-line\"></div>
        </div>
        <div class=\"branch\">
          <div class=\"img-box br2\"></div>
          <button><img src=\"{{ 'assets/img/down2.png'|theme }}\"></button>
          <h2>Урология</h2>
          <div class=\"title-line\"></div>
        </div>
        <div class=\"branch\">
          <div class=\"img-box br3\"></div>
          <button><img src=\"{{ 'assets/img/down2.png'|theme }}\"></button>
          <h2>Эндокринология</h2>
          <div class=\"title-line\"></div>
        </div>
        <div class=\"branch\">
          <div class=\"img-box br4\"></div>
          <button><img src=\"{{ 'assets/img/down2.png'|theme }}\"></button>
          <h2>УЗИ диагностика</h2>
          <div class=\"title-line\"></div>
        </div>
      </div>
      <div class=\"med-lines\">
        <img src=\"{{ 'assets/img/lines.png'|theme }}\" alt=\"\">
      </div>
    </div>
  </div>", "C:\\OSPanel\\domains\\medi-art/themes/my-theme/partials/med-branches.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 10);
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
