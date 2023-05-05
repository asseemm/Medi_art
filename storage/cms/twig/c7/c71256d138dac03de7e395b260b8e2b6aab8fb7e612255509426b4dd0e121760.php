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

/* C:\OSPanel\domains\medi-art/themes/my-theme/partials/our-blog.htm */
class __TwigTemplate_f99aaac9f04270349118e39c91b688b2c5066669c80fad3728d5168bf036094a extends \Twig\Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, true, 1);
        // line 2
        echo "
<div class=\"our-blog\" id=\"blog\">
    <div class=\"our-blog-cont\">
      <div class=\"title\">
        <h1>Наш блог</h1>
        <div class=\"title-line\"></div>
      </div>

      <div class=\"card-body\">
        <div class=\"slide-container swiper\">
          <div class=\"slide-content\">
            <div class=\"card-wrapper swiper-wrapper\">
              <div class=\"slider-card swiper-slide\">
                      <img src=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog11.png");
        echo "\" class=\"blog-img\">
                      <button><img src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/down2.png");
        echo "\" alt=\"\"></button>
                      <div class=\"slider-card-content\">
                        <a href=\"#\">#ПОЛЕЗНЫЕ СТАТЬИ</a>
                        <h2 class=\"card-title\">Крауроз вульвы или <br> склероатрофический лихен</h2>
                        <div class=\"title-line\"></div>
                        <p>01.01.2023</p>
                      </div>
              </div>
              <div class=\"slider-card swiper-slide\">
                <img src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog2.png");
        echo "\" class=\"blog-img\">
                <button><img src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/down2.png");
        echo "\"></button>
                <div class=\"slider-card-content\">
                  <a href=\"#\">#ЧТО МЫ ЛЕЧИМ?</a>
                  <h2 class=\"card-title\">Пиелонефрит: причины, <br> симптомы, диагностика и лечение </h2>
                  <div class=\"title-line\"></div>
                  <p>01.01.2023</p>
                </div>
              </div>
              <div class=\"slider-card swiper-slide\">
                <img src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog3.png");
        echo "\" class=\"blog-img\">
                <button><img src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/down2.png");
        echo "\" alt=\"\"></button>
                <div class=\"slider-card-content\">
                  <a href=\"#\">#ПОЛЕЗНЫЕ СТАТЬИ</a>
                  <h2 class=\"card-title\">Мужской климакс — заболевание, <br> требующее должного внимания!</h2>
                  <div class=\"title-line\"></div>
                  <p>01.01.2023</p>
                </div>
              </div>
              <div class=\"slider-card swiper-slide\">
                <img src=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog11.png");
        echo "\" class=\"blog-img\">
                <button><img src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/down2.png");
        echo "\" alt=\"\"></button>
                <div class=\"slider-card-content\">
                    <a href=\"#\">#ПОЛЕЗНЫЕ СТАТЬИ</a>
                    <h2 class=\"card-title\">Крауроз вульвы или <br> склероатрофический лихен</h2>
                    <div class=\"title-line\"></div>
                    <p>01.01.2023</p>
                </div>
              </div>
              <div class=\"slider-card swiper-slide\">
                <img src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog11.png");
        echo "\" class=\"blog-img\">
                <button><img src=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/down2.png");
        echo "\" alt=\"\"></button>
                <div class=\"slider-card-content\">
                    <a href=\"#\">#ПОЛЕЗНЫЕ СТАТЬИ</a>
                    <h2 class=\"card-title\">Крауроз вульвы или <br> склероатрофический лихен</h2>
                    <div class=\"title-line\"></div>
                    <p>01.01.2023</p>
                </div>
              </div>
              <div class=\"slider-card swiper-slide\">
                <img src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog11.png");
        echo "\" class=\"blog-img\">
                <button><img src=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/down2.png");
        echo "\" alt=\"\"></button>
                <div class=\"slider-card-content\">
                    <a href=\"#\">#ПОЛЕЗНЫЕ СТАТЬИ</a>
                    <h2 class=\"card-title\">Крауроз вульвы или <br> склероатрофический лихен</h2>
                    <div class=\"title-line\"></div>
                    <p>01.01.2023</p>
                  </div>
                </div>
            </div>
            
  
            <div class=\"swiper-button-next swiper-navBtn\"></div>
            <div class=\"swiper-button-prev swiper-navBtn\"></div>
            <div class=\"swiper-pagination\"></div>
          </div>
        </div>
      </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\medi-art/themes/my-theme/partials/our-blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 66,  136 => 65,  124 => 56,  120 => 55,  108 => 46,  104 => 45,  92 => 36,  88 => 35,  76 => 26,  72 => 25,  60 => 16,  56 => 15,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set posts = blogPosts.posts %}

<div class=\"our-blog\" id=\"blog\">
    <div class=\"our-blog-cont\">
      <div class=\"title\">
        <h1>Наш блог</h1>
        <div class=\"title-line\"></div>
      </div>

      <div class=\"card-body\">
        <div class=\"slide-container swiper\">
          <div class=\"slide-content\">
            <div class=\"card-wrapper swiper-wrapper\">
              <div class=\"slider-card swiper-slide\">
                      <img src=\"{{ 'assets/img/blog11.png'|theme }}\" class=\"blog-img\">
                      <button><img src=\"{{ 'assets/img/down2.png'|theme }}\" alt=\"\"></button>
                      <div class=\"slider-card-content\">
                        <a href=\"#\">#ПОЛЕЗНЫЕ СТАТЬИ</a>
                        <h2 class=\"card-title\">Крауроз вульвы или <br> склероатрофический лихен</h2>
                        <div class=\"title-line\"></div>
                        <p>01.01.2023</p>
                      </div>
              </div>
              <div class=\"slider-card swiper-slide\">
                <img src=\"{{ 'assets/img/blog2.png'|theme }}\" class=\"blog-img\">
                <button><img src=\"{{ 'assets/img/down2.png'|theme }}\"></button>
                <div class=\"slider-card-content\">
                  <a href=\"#\">#ЧТО МЫ ЛЕЧИМ?</a>
                  <h2 class=\"card-title\">Пиелонефрит: причины, <br> симптомы, диагностика и лечение </h2>
                  <div class=\"title-line\"></div>
                  <p>01.01.2023</p>
                </div>
              </div>
              <div class=\"slider-card swiper-slide\">
                <img src=\"{{ 'assets/img/blog3.png'|theme }}\" class=\"blog-img\">
                <button><img src=\"{{ 'assets/img/down2.png'|theme }}\" alt=\"\"></button>
                <div class=\"slider-card-content\">
                  <a href=\"#\">#ПОЛЕЗНЫЕ СТАТЬИ</a>
                  <h2 class=\"card-title\">Мужской климакс — заболевание, <br> требующее должного внимания!</h2>
                  <div class=\"title-line\"></div>
                  <p>01.01.2023</p>
                </div>
              </div>
              <div class=\"slider-card swiper-slide\">
                <img src=\"{{ 'assets/img/blog11.png'|theme }}\" class=\"blog-img\">
                <button><img src=\"{{ 'assets/img/down2.png'|theme }}\" alt=\"\"></button>
                <div class=\"slider-card-content\">
                    <a href=\"#\">#ПОЛЕЗНЫЕ СТАТЬИ</a>
                    <h2 class=\"card-title\">Крауроз вульвы или <br> склероатрофический лихен</h2>
                    <div class=\"title-line\"></div>
                    <p>01.01.2023</p>
                </div>
              </div>
              <div class=\"slider-card swiper-slide\">
                <img src=\"{{ 'assets/img/blog11.png'|theme }}\" class=\"blog-img\">
                <button><img src=\"{{ 'assets/img/down2.png'|theme }}\" alt=\"\"></button>
                <div class=\"slider-card-content\">
                    <a href=\"#\">#ПОЛЕЗНЫЕ СТАТЬИ</a>
                    <h2 class=\"card-title\">Крауроз вульвы или <br> склероатрофический лихен</h2>
                    <div class=\"title-line\"></div>
                    <p>01.01.2023</p>
                </div>
              </div>
              <div class=\"slider-card swiper-slide\">
                <img src=\"{{ 'assets/img/blog11.png'|theme }}\" class=\"blog-img\">
                <button><img src=\"{{ 'assets/img/down2.png'|theme }}\" alt=\"\"></button>
                <div class=\"slider-card-content\">
                    <a href=\"#\">#ПОЛЕЗНЫЕ СТАТЬИ</a>
                    <h2 class=\"card-title\">Крауроз вульвы или <br> склероатрофический лихен</h2>
                    <div class=\"title-line\"></div>
                    <p>01.01.2023</p>
                  </div>
                </div>
            </div>
            
  
            <div class=\"swiper-button-next swiper-navBtn\"></div>
            <div class=\"swiper-button-prev swiper-navBtn\"></div>
            <div class=\"swiper-pagination\"></div>
          </div>
        </div>
      </div>
    </div>
</div>", "C:\\OSPanel\\domains\\medi-art/themes/my-theme/partials/our-blog.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1);
        static $filters = array("theme" => 15);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
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
