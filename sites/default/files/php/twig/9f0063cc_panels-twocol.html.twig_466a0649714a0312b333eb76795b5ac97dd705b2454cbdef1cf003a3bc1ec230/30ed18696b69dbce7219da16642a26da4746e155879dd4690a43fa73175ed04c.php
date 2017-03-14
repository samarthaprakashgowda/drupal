<?php

/* modules/panels/layouts/twocol/panels-twocol.html.twig */
class __TwigTemplate_b6fa20cadf67461d27c5af14d9deb731ee753bf4595f966b4b7f7c59d450c0ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 17);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 17
        echo "<div class=\"panel-2col\" ";
        if ((isset($context["css_id"]) ? $context["css_id"] : null)) {
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["css_id"]) ? $context["css_id"] : null), "html", null, true));
        }
        echo ">
  <div class=\"panel-panel\">
    ";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "left", array()), "html", null, true));
        echo "
  </div>

  <div class=\"panel-panel\">
    ";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "right", array()), "html", null, true));
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/panels/layouts/twocol/panels-twocol.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 23,  51 => 19,  43 => 17,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Template for a 2 column panel layout.*/
/*  **/
/*  * This template provides a two column panel display layout, with*/
/*  * each column roughly equal in width.*/
/*  **/
/*  * Variables:*/
/*  * - $id: An optional CSS id to use for the layout.*/
/*  * - $content: An array of content, each item in the array is keyed to one*/
/*  *   panel of the layout. This layout supports the following sections:*/
/*  *   - $content['left']: Content in the left column.*/
/*  *   - $content['right']: Content in the right column.*/
/*  *//* */
/* #}*/
/* <div class="panel-2col" {% if css_id %}{{ css_id }}{% endif %}>*/
/*   <div class="panel-panel">*/
/*     {{ content.left }}*/
/*   </div>*/
/* */
/*   <div class="panel-panel">*/
/*     {{ content.right }}*/
/*   </div>*/
/* </div>*/
/* */
