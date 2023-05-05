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

/* C:\OSPanel\domains\medi-art/themes/my-theme/partials/appointment.htm */
class __TwigTemplate_26912e442c66b21005b809271e1aeab7a5f61b1025acfb96ed6a5f57a3f139fc extends \Twig\Template
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
      <div class=\"zapis\">
        <div class=\"zapis-cont\">
          <h1>Запись на прием</h1>
          <img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/Rectangle 2120.png");
        echo "\">
          <p>Заполните поля и наш консультант свяжется <br> с вами в ближайшее время</p>
          <form action=\"\">
            <input type=\"text\" placeholder=\"Ваше имя\">
            <input type=\"text\"placeholder=\"Ваш телефон\">
            <button type=\"submit\">Отправить</button>
          </form>
        </div>
      </div>
      <div class=\"pluses\">
        <div class=\"plus\">
          <img src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/heart2.png");
        echo "\" class=\"plus-img\">
          <h1>Комплексное решение</h1>
          <div class=\"line-point\">
            <div class=\"line\"></div>
            <img src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/point.png");
        echo "\">
            <div class=\"line\"></div>
          </div>
          <p>
            Прием пациента, сбор анализов, УЗИ, <br> уродинамическое обследование, <br> эндоскопическое обследование и лечение в <br> полном объеме выполняются в пределах <br> нашего центра.
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
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/folder2.png");
        echo "\" class=\"plus-img\">
          <h1>ТОЧНАЯ ДИАГНОСТИКА И ЛЕЧЕНИЕ</h1>
          <div class=\"line-point\">
            <div class=\"line\"></div>
            <img src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/point.png");
        echo "\">
            <div class=\"line\"></div>
          </div>
          <p>
            Мы стремимся проводить диагностику и <br> лечение с максимальным уровнем сервиса, <br> избегая, при этом лишних исследований и <br> экономим ваши время и деньги. Программы <br> диагностики и лечения составляются для <br> каждого пациента индивидуально.
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
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/comp2.png");
        echo "\" class=\"plus-img\">
          <h1>СОВРЕМЕННОЕ ОБОРУДОВАНИЕ</h1>
          <div class=\"line-point\">
            <div class=\"line\"></div>
            <img src=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/point.png");
        echo "\">
            <div class=\"line\"></div>
          </div>
          <p>
            Комбинация самых современных методов <br> диагностики и лечения основаны на богатом <br> и положительном опыте высококвалифированных <br> врачей нашего Центра в узкопрофильной <br> и высокотехнологичной медицине.
            ​</p>
        </div>
      </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\medi-art/themes/my-theme/partials/appointment.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 61,  112 => 57,  93 => 41,  86 => 37,  67 => 21,  60 => 17,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"appointment\">
    <div class=\"appoint-cont\">
      <div class=\"zapis\">
        <div class=\"zapis-cont\">
          <h1>Запись на прием</h1>
          <img src=\"{{ 'assets/img/Rectangle 2120.png'|theme }}\">
          <p>Заполните поля и наш консультант свяжется <br> с вами в ближайшее время</p>
          <form action=\"\">
            <input type=\"text\" placeholder=\"Ваше имя\">
            <input type=\"text\"placeholder=\"Ваш телефон\">
            <button type=\"submit\">Отправить</button>
          </form>
        </div>
      </div>
      <div class=\"pluses\">
        <div class=\"plus\">
          <img src=\"{{ 'assets/img/heart2.png'|theme }}\" class=\"plus-img\">
          <h1>Комплексное решение</h1>
          <div class=\"line-point\">
            <div class=\"line\"></div>
            <img src=\"{{ 'assets/img/point.png'|theme }}\">
            <div class=\"line\"></div>
          </div>
          <p>
            Прием пациента, сбор анализов, УЗИ, <br> уродинамическое обследование, <br> эндоскопическое обследование и лечение в <br> полном объеме выполняются в пределах <br> нашего центра.
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
          <img src=\"{{ 'assets/img/folder2.png'|theme }}\" class=\"plus-img\">
          <h1>ТОЧНАЯ ДИАГНОСТИКА И ЛЕЧЕНИЕ</h1>
          <div class=\"line-point\">
            <div class=\"line\"></div>
            <img src=\"{{ 'assets/img/point.png'|theme }}\">
            <div class=\"line\"></div>
          </div>
          <p>
            Мы стремимся проводить диагностику и <br> лечение с максимальным уровнем сервиса, <br> избегая, при этом лишних исследований и <br> экономим ваши время и деньги. Программы <br> диагностики и лечения составляются для <br> каждого пациента индивидуально.
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
          <img src=\"{{ 'assets/img/comp2.png'|theme }}\" class=\"plus-img\">
          <h1>СОВРЕМЕННОЕ ОБОРУДОВАНИЕ</h1>
          <div class=\"line-point\">
            <div class=\"line\"></div>
            <img src=\"{{ 'assets/img/point.png'|theme }}\">
            <div class=\"line\"></div>
          </div>
          <p>
            Комбинация самых современных методов <br> диагностики и лечения основаны на богатом <br> и положительном опыте высококвалифированных <br> врачей нашего Центра в узкопрофильной <br> и высокотехнологичной медицине.
            ​</p>
        </div>
      </div>
    </div>
</div>", "C:\\OSPanel\\domains\\medi-art/themes/my-theme/partials/appointment.htm", "");
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
