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

/* C:\OSPanel\domains\medi-art/themes/my-theme/pages/services.htm */
class __TwigTemplate_f9235f2a7951b640ce45f2a75e313e4100daa5b488944da36c4b91ff991b4641 extends \Twig\Template
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
        echo "<div class=\"popular-services\">
    <div class=\"title\">
        <h1>Популярные услуги</h1>
        <div class=\"title-line\"></div>
      </div>
    
    <div class=\"services\">
        ";
        // line 8
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, true, 8);
        // line 9
        echo "        ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, true, 9);
        // line 10
        echo "        ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, true, 10);
        // line 11
        echo "        ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, true, 11);
        // line 12
        echo "        ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 12);
        // line 13
        echo "        ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 13);
        // line 14
        echo "
        <ul class=\"record-list\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 17
            echo "                <li>
                    <h3>
                    ";
            // line 19
            if (($context["detailsPage"] ?? null)) {
                echo "<a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 19, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 19)]);
                echo "\">";
            }
            // line 20
            echo "                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "
                    ";
            // line 21
            if (($context["detailsPage"] ?? null)) {
                echo "</a>";
            }
            // line 22
            echo "                    </h3>

                    <p>";
            // line 24
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, true, 24), 24, $this->source);
            echo "</p>
                </li>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "                <li class=\"no-data\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noRecordsMessage"] ?? null), 27, $this->source), "html", null, true);
            echo "
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </ul>

        ";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 32) > 1)) {
            // line 33
            echo "            <ul class=\"pagination\">
                ";
            // line 34
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 34) > 1)) {
                // line 35
                echo "                    <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 35), "baseFileName", [], "any", false, false, true, 35), 35, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 35) - 1)]);
                echo "\">&larr; Prev</a></li>
                ";
            }
            // line 37
            echo "
                ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 38)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 39
                echo "                    <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 39) == $context["page"])) ? ("active") : (null));
                echo "\">
                        <a href=\"";
                // line 40
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 40), "baseFileName", [], "any", false, false, true, 40), 40, $this->source), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 40, $this->source), "html", null, true);
                echo "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "
                ";
            // line 44
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 44) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 44))) {
                // line 45
                echo "                    <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 45), "baseFileName", [], "any", false, false, true, 45), 45, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 45) + 1)]);
                echo "\">Next &rarr;</a></li>
                ";
            }
            // line 47
            echo "            </ul>
        ";
        }
        // line 49
        echo "    </div>
    

</div>";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\medi-art/themes/my-theme/pages/services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 49,  166 => 47,  160 => 45,  158 => 44,  155 => 43,  144 => 40,  139 => 39,  135 => 38,  132 => 37,  126 => 35,  124 => 34,  121 => 33,  119 => 32,  115 => 30,  105 => 27,  97 => 24,  93 => 22,  89 => 21,  84 => 20,  78 => 19,  74 => 17,  69 => 16,  65 => 14,  62 => 13,  59 => 12,  56 => 11,  53 => 10,  50 => 9,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"popular-services\">
    <div class=\"title\">
        <h1>Популярные услуги</h1>
        <div class=\"title-line\"></div>
      </div>
    
    <div class=\"services\">
        {% set records = builderList.records %}
        {% set displayColumn = builderList.displayColumn %}
        {% set noRecordsMessage = builderList.noRecordsMessage %}
        {% set detailsPage = builderList.detailsPage %}
        {% set detailsKeyColumn = builderList.detailsKeyColumn %}
        {% set detailsUrlParameter = builderList.detailsUrlParameter %}

        <ul class=\"record-list\">
            {% for record in records %}
                <li>
                    <h3>
                    {% if detailsPage %}<a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">{% endif %}
                    {{ record.name }}
                    {% if detailsPage %}</a>{% endif %}
                    </h3>

                    <p>{{ record.description|raw }}</p>
                </li>
            {% else %}
                <li class=\"no-data\">{{ noRecordsMessage }}
                </li>
            {% endfor %}
        </ul>

        {% if records.lastPage > 1 %}
            <ul class=\"pagination\">
                {% if records.currentPage > 1 %}
                    <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; Prev</a></li>
                {% endif %}

                {% for page in 1..records.lastPage %}
                    <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
                        <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
                    </li>
                {% endfor %}

                {% if records.lastPage > records.currentPage %}
                    <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Next &rarr;</a></li>
                {% endif %}
            </ul>
        {% endif %}
    </div>
    

</div>", "C:\\OSPanel\\domains\\medi-art/themes/my-theme/pages/services.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "for" => 16, "if" => 19);
        static $filters = array("page" => 19, "escape" => 20, "raw" => 24);
        static $functions = array("range" => 38);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['page', 'escape', 'raw'],
                ['range']
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
