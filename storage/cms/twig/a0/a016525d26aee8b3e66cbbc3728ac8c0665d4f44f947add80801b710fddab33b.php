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

/* C:\OSPanel\domains\medi-art/themes/my-theme/partials/appointment_2.htm */
class __TwigTemplate_a5c5d73d2b293721bc644f68e69d44f78ec8b7a8e9a4e4641c611ef7a5c8b810 extends \Twig\Template
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
        echo "<div class=\"appointment\">
    <div class=\"appoint-cont\">
      <div class=\"zapis zapis-second\">
        <div class=\"zapis-cont\">
          <h1>Запись на прием</h1>
          <img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Rectangle 2120.png");
        echo "\" alt=\"\">
          <p>Заполните поля и наш консультант свяжется <br> с вами в ближайшее время</p>
          <form action=\"\">
            <input type=\"text\" placeholder=\"Ваше имя\">
            <input type=\"text\"placeholder=\"Ваш телефон\">
            <button type=\"submit\">Отправить</button>
          </form>
        </div>
      </div>
      <div class=\"pluses pluses2\">
        <div class=\"plus\">
          <img src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/docs.png");
        echo "\" class=\"plus-img\">
          <h1>КВАЛИФИЦИРОВАННЫЙ ПЕРСОНАЛ</h1>
          <div class=\"line-point\">
            <div class=\"line\"></div>
            <img src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/point.png");
        echo "\">
            <div class=\"line\"></div>
          </div>
          <p>
            Наши специалисты преумножают свои
            знания на курсах повышения
            квалификации, участвуют в международных конференциях и научных семинарах, проводят обучающие мастер-классы.
          </p>
        </div>
        <div class=\"decor\">
          <div class=\"thr-point\">
            <div class=\"point\"></div>
            <div class=\"point\"></div>
            <div class=\"point\"></div>
          </div>
          <div class=\"line-long\"></div>
        </div>
        <div class=\"plus\">
          <img src=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/like.png");
        echo "\" class=\"plus-img\">
          <h1>безупречная репутация</h1>
          <div class=\"line-point\">
            <div class=\"line\"></div>
            <img src=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/point.png");
        echo "\">
            <div class=\"line\"></div>
          </div>
          <p>
            Наша безупречная репутация является результатом успешного лечения и индивидуального подхода к каждому пациенту.
          </p>
        </div>
        <div class=\"decor\">
          <div class=\"thr-point\">
            <div class=\"point\"></div>
            <div class=\"point\"></div>
            <div class=\"point\"></div>
          </div>
          <div class=\"line-long\"></div>
        </div>
        <div class=\"plus\">
          <img src=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/doh.png");
        echo "\" class=\"plus-img\">
          <h1>ИНДИВИДУАЛЬНЫЙ ПОДХОД</h1>
          <div class=\"line-point\">
            <div class=\"line\"></div>
            <img src=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/point.png");
        echo "\">
            <div class=\"line\"></div>
          </div>
          <p>
            Мы оказываем высококвалифицированные медицинские услуги и максимально детально изучаем проблему каждого отдельного пациента.
          ​</p>
        </div>
      </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\medi-art/themes/my-theme/partials/appointment_2.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 63,  114 => 59,  95 => 43,  88 => 39,  67 => 21,  60 => 17,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"appointment\">
    <div class=\"appoint-cont\">
      <div class=\"zapis zapis-second\">
        <div class=\"zapis-cont\">
          <h1>Запись на прием</h1>
          <img src=\"{{ 'assets/img/Rectangle 2120.png'|theme }}\" alt=\"\">
          <p>Заполните поля и наш консультант свяжется <br> с вами в ближайшее время</p>
          <form action=\"\">
            <input type=\"text\" placeholder=\"Ваше имя\">
            <input type=\"text\"placeholder=\"Ваш телефон\">
            <button type=\"submit\">Отправить</button>
          </form>
        </div>
      </div>
      <div class=\"pluses pluses2\">
        <div class=\"plus\">
          <img src=\"{{ 'assets/img/docs.png'|theme }}\" class=\"plus-img\">
          <h1>КВАЛИФИЦИРОВАННЫЙ ПЕРСОНАЛ</h1>
          <div class=\"line-point\">
            <div class=\"line\"></div>
            <img src=\"{{ 'assets/img/point.png'|theme }}\">
            <div class=\"line\"></div>
          </div>
          <p>
            Наши специалисты преумножают свои
            знания на курсах повышения
            квалификации, участвуют в международных конференциях и научных семинарах, проводят обучающие мастер-классы.
          </p>
        </div>
        <div class=\"decor\">
          <div class=\"thr-point\">
            <div class=\"point\"></div>
            <div class=\"point\"></div>
            <div class=\"point\"></div>
          </div>
          <div class=\"line-long\"></div>
        </div>
        <div class=\"plus\">
          <img src=\"{{ 'assets/img/like.png'|theme }}\" class=\"plus-img\">
          <h1>безупречная репутация</h1>
          <div class=\"line-point\">
            <div class=\"line\"></div>
            <img src=\"{{ 'assets/img/point.png'|theme }}\">
            <div class=\"line\"></div>
          </div>
          <p>
            Наша безупречная репутация является результатом успешного лечения и индивидуального подхода к каждому пациенту.
          </p>
        </div>
        <div class=\"decor\">
          <div class=\"thr-point\">
            <div class=\"point\"></div>
            <div class=\"point\"></div>
            <div class=\"point\"></div>
          </div>
          <div class=\"line-long\"></div>
        </div>
        <div class=\"plus\">
          <img src=\"{{ 'assets/img/doh.png'|theme }}\" class=\"plus-img\">
          <h1>ИНДИВИДУАЛЬНЫЙ ПОДХОД</h1>
          <div class=\"line-point\">
            <div class=\"line\"></div>
            <img src=\"{{ 'assets/img/point.png'|theme }}\">
            <div class=\"line\"></div>
          </div>
          <p>
            Мы оказываем высококвалифицированные медицинские услуги и максимально детально изучаем проблему каждого отдельного пациента.
          ​</p>
        </div>
      </div>
    </div>
</div>", "C:\\OSPanel\\domains\\medi-art/themes/my-theme/partials/appointment_2.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 6);
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
