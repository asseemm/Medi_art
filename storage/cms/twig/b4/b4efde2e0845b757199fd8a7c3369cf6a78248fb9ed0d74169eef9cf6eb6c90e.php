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

/* C:\OSPanel\domains\medi-art/themes/my-theme/partials/medi-art.htm */
class __TwigTemplate_0448c5cb6749f5e1b41ec6c2e9ccb7fa4704334970cb52a9a36468f053968a2a extends \Twig\Template
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
        echo "<div class=\"medi-art\" id=\"medi-art\">
    <div class=\"medi-art-cont\">
      <div class=\"med-img\"></div>
      <div class=\"art-info\">
        <div class=\"title\">
          <h1>Медцентр Medi-Art</h1>
          <div class=\"title-line\"></div>
        </div>
        ";
        // line 9
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "about/about-text.htm"        ;
        $context['__cms_component_params']['fixture'] = "p"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 10
        echo "        <h2>Ринат Нугуманов</h2>
        ";
        // line 11
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "about/about-dir.htm"        ;
        $context['__cms_component_params']['fixture'] = "p"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 12
        echo "
      </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\medi-art/themes/my-theme/partials/medi-art.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  58 => 11,  55 => 10,  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"medi-art\" id=\"medi-art\">
    <div class=\"medi-art-cont\">
      <div class=\"med-img\"></div>
      <div class=\"art-info\">
        <div class=\"title\">
          <h1>Медцентр Medi-Art</h1>
          <div class=\"title-line\"></div>
        </div>
        {% component 'contenteditor' file=\"about/about-text.htm\" fixture=\"p\" %}
        <h2>Ринат Нугуманов</h2>
        {% component 'contenteditor' file=\"about/about-dir.htm\" fixture=\"p\" %}

      </div>
    </div>
</div>", "C:\\OSPanel\\domains\\medi-art/themes/my-theme/partials/medi-art.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 9);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
                [],
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
