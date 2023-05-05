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

/* C:\OSPanel\domains\medi-art/themes/my-theme/partials/services.htm */
class __TwigTemplate_579be02ffb8bf4637a7929918ea8f093cd8aec2defbca313f855e178d7fd47d7 extends \Twig\Template
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
        echo "<div class=\"popular-services\" id=\"services\">
    <div class=\"pop-serv-cont\">
      <div class=\"title\">
        <h1>Популярные услуги</h1>
        <div class=\"title-line\"></div>
      </div>

      <div class=\"card-body\">
        <div class=\"slide-container swiper\">
          <div class=\"slide-content\">
              <div class=\"card-wrapper swiper-wrapper\">
                <div class=\"slider-card swiper-slide\">
                  <img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/card1.png");
        echo "\">
                  <div class=\"slider-card-content\">
                    <h2 class=\"card-title\">Ведение раннего <br> послеродового периода</h2>
                    <p class=\"description\">Ведение раннего послеродового <br> периода (снятие швов на промежности, <br> санация, обработка раны) <br><br></p>
                    <img src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/card-line0w.png");
        echo "\" class=\"wh-line-down\">
                    <img src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/card_line.png");
        echo "\" class=\"bl-line-down\">
                    <button class=\"button\">узнать подробнее</button>
                  </div>
                </div>
                <div class=\"slider-card swiper-slide\">
                  <img src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/card2_bl.png");
        echo "\">
                  <div class=\"slider-card-content\">
                    <h2 class=\"card-title\">Интимная контурная <br> пластика</h2>
                    <p class=\"description\">Интимная контурная пластика <br> (интимный филлинг) – это процесс <br> введения геля гиалуроновой кислоты в <br> интимную зону с целью их коррекции.</p>
                    <img src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/card-line0w.png");
        echo "\" class=\"wh-line-down\">
                    <img src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/card_line.png");
        echo "\" class=\"bl-line-down\">
                    <button class=\"button\">узнать подробнее</button>
                  </div>
                </div>
                <div class=\"slider-card swiper-slide\">
                  <img src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/card3.png");
        echo "\">
                  <div class=\"slider-card-content\">
                    <h2 class=\"card-title\">Удаление папиллом</h2>
                    <p class=\"description\">Удаление папиллом (остроконечных <br> кондилом) на теле, на половых органах <br> у мужчин и женщин, в области заднего <br> прохода современнейшим <br> радиоволновым методом.</p>
                    <img src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/card-line0w.png");
        echo "\" class=\"wh-line-down\">
                    <img src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/card_line.png");
        echo "\" class=\"bl-line-down\">
                    <button class=\"button\">узнать подробнее</button>
                  </div>
                </div>
                <div class=\"slider-card swiper-slide\">
                  <img src=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/card1.png");
        echo "\">
                  <div class=\"slider-card-content\">
                    <h2 class=\"card-title\">Ведение раннего <br> послеродового периода</h2>
                    <p class=\"description\">Ведение раннего послеродового <br> периода (снятие швов на промежности, <br> санация, обработка раны) <br><br></p>
                    <img src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/card-line0w.png");
        echo "\" class=\"wh-line-down\">
                    <img src=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/card_line.png");
        echo "\" class=\"bl-line-down\">
                    <button class=\"button\">узнать подробнее</button>
                  </div>
                </div>
                <div class=\"slider-card swiper-slide\">
                  <img src=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/card2_bl.png");
        echo "\">
                  <div class=\"slider-card-content\">
                    <h2 class=\"card-title\">Интимная контурная <br> пластика</h2>
                    <p class=\"description\">Интимная контурная пластика <br> (интимный филлинг) – это процесс <br> введения геля гиалуроновой кислоты в <br> интимную зону с целью их коррекции.</p>
                    <img src=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/card-line0w.png");
        echo "\" class=\"wh-line-down\">
                    <img src=\"";
        // line 58
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/card_line.png");
        echo "\" class=\"bl-line-down\">
                    <button class=\"button\">узнать подробнее</button>
                  </div>
                </div>
                <div class=\"slider-card swiper-slide\">
                  <img src=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/card3.png");
        echo "\">
                  <div class=\"slider-card-content\">
                    <h2 class=\"card-title\">Удаление папиллом</h2>
                    <p class=\"description\">Удаление папиллом (остроконечных <br> кондилом) на теле, на половых органах <br> у мужчин и женщин, в области заднего <br> прохода современнейшим <br> радиоволновым методом.</p>
                    <img src=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/card-line0w.png");
        echo "\" class=\"wh-line-down\">
                    <img src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/card_line.png");
        echo "\" class=\"bl-line-down\">
                    <button class=\"button\">узнать подробнее</button>
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
        return "C:\\OSPanel\\domains\\medi-art/themes/my-theme/partials/services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 68,  155 => 67,  148 => 63,  140 => 58,  136 => 57,  129 => 53,  121 => 48,  117 => 47,  110 => 43,  102 => 38,  98 => 37,  91 => 33,  83 => 28,  79 => 27,  72 => 23,  64 => 18,  60 => 17,  53 => 13,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"popular-services\" id=\"services\">
    <div class=\"pop-serv-cont\">
      <div class=\"title\">
        <h1>Популярные услуги</h1>
        <div class=\"title-line\"></div>
      </div>

      <div class=\"card-body\">
        <div class=\"slide-container swiper\">
          <div class=\"slide-content\">
              <div class=\"card-wrapper swiper-wrapper\">
                <div class=\"slider-card swiper-slide\">
                  <img src=\"{{ 'assets/img/card1.png'|theme }}\">
                  <div class=\"slider-card-content\">
                    <h2 class=\"card-title\">Ведение раннего <br> послеродового периода</h2>
                    <p class=\"description\">Ведение раннего послеродового <br> периода (снятие швов на промежности, <br> санация, обработка раны) <br><br></p>
                    <img src=\"{{ 'assets/img/card-line0w.png'|theme }}\" class=\"wh-line-down\">
                    <img src=\"{{ 'assets/img/card_line.png'|theme }}\" class=\"bl-line-down\">
                    <button class=\"button\">узнать подробнее</button>
                  </div>
                </div>
                <div class=\"slider-card swiper-slide\">
                  <img src=\"{{ 'assets/img/card2_bl.png'|theme }}\">
                  <div class=\"slider-card-content\">
                    <h2 class=\"card-title\">Интимная контурная <br> пластика</h2>
                    <p class=\"description\">Интимная контурная пластика <br> (интимный филлинг) – это процесс <br> введения геля гиалуроновой кислоты в <br> интимную зону с целью их коррекции.</p>
                    <img src=\"{{ 'assets/img/card-line0w.png'|theme }}\" class=\"wh-line-down\">
                    <img src=\"{{ 'assets/img/card_line.png'|theme }}\" class=\"bl-line-down\">
                    <button class=\"button\">узнать подробнее</button>
                  </div>
                </div>
                <div class=\"slider-card swiper-slide\">
                  <img src=\"{{ 'assets/img/card3.png'|theme }}\">
                  <div class=\"slider-card-content\">
                    <h2 class=\"card-title\">Удаление папиллом</h2>
                    <p class=\"description\">Удаление папиллом (остроконечных <br> кондилом) на теле, на половых органах <br> у мужчин и женщин, в области заднего <br> прохода современнейшим <br> радиоволновым методом.</p>
                    <img src=\"{{ 'assets/img/card-line0w.png'|theme }}\" class=\"wh-line-down\">
                    <img src=\"{{ 'assets/img/card_line.png'|theme }}\" class=\"bl-line-down\">
                    <button class=\"button\">узнать подробнее</button>
                  </div>
                </div>
                <div class=\"slider-card swiper-slide\">
                  <img src=\"{{ 'assets/img/card1.png'|theme }}\">
                  <div class=\"slider-card-content\">
                    <h2 class=\"card-title\">Ведение раннего <br> послеродового периода</h2>
                    <p class=\"description\">Ведение раннего послеродового <br> периода (снятие швов на промежности, <br> санация, обработка раны) <br><br></p>
                    <img src=\"{{ 'assets/img/card-line0w.png'|theme }}\" class=\"wh-line-down\">
                    <img src=\"{{ 'assets/img/card_line.png'|theme }}\" class=\"bl-line-down\">
                    <button class=\"button\">узнать подробнее</button>
                  </div>
                </div>
                <div class=\"slider-card swiper-slide\">
                  <img src=\"{{ 'assets/img/card2_bl.png'|theme }}\">
                  <div class=\"slider-card-content\">
                    <h2 class=\"card-title\">Интимная контурная <br> пластика</h2>
                    <p class=\"description\">Интимная контурная пластика <br> (интимный филлинг) – это процесс <br> введения геля гиалуроновой кислоты в <br> интимную зону с целью их коррекции.</p>
                    <img src=\"{{ 'assets/img/card-line0w.png'|theme }}\" class=\"wh-line-down\">
                    <img src=\"{{ 'assets/img/card_line.png'|theme }}\" class=\"bl-line-down\">
                    <button class=\"button\">узнать подробнее</button>
                  </div>
                </div>
                <div class=\"slider-card swiper-slide\">
                  <img src=\"{{ 'assets/img/card3.png'|theme }}\">
                  <div class=\"slider-card-content\">
                    <h2 class=\"card-title\">Удаление папиллом</h2>
                    <p class=\"description\">Удаление папиллом (остроконечных <br> кондилом) на теле, на половых органах <br> у мужчин и женщин, в области заднего <br> прохода современнейшим <br> радиоволновым методом.</p>
                    <img src=\"{{ 'assets/img/card-line0w.png'|theme }}\" class=\"wh-line-down\">
                    <img src=\"{{ 'assets/img/card_line.png'|theme }}\" class=\"bl-line-down\">
                    <button class=\"button\">узнать подробнее</button>
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
</div>", "C:\\OSPanel\\domains\\medi-art/themes/my-theme/partials/services.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 13);
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
