<?php

/* themes/lacity/templates/container--custom.html.twig */
class __TwigTemplate_aeaa66996cdbd3ca017f004e388511c9c0daff3b94dbb209c62faa8238254f63 extends Twig_Template
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
        $tags = array("set" => 26);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
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

        // line 26
        $context["classes"] = array(0 => ((        // line 27
(isset($context["has_parent"]) ? $context["has_parent"] : null)) ? ("js-form-wrapper") : ("")), 1 => ((        // line 28
(isset($context["has_parent"]) ? $context["has_parent"] : null)) ? ("form-wrapper") : ("")));
        // line 31
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/lacity/templates/container--custom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 31,  45 => 28,  44 => 27,  43 => 26,);
    }
}
/* {#*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation of a container used to wrap child elements.*/
/*  **/
/*  * Used for grouped form items. Can also be used as a theme wrapper for any*/
/*  * renderable element, to surround it with a <div> and HTML attributes.*/
/*  * See \Drupal\Core\Render\Element\RenderElement for more*/
/*  * information on the #theme_wrappers render array property, and*/
/*  * \Drupal\Core\Render\Element\container for usage of the container render*/
/*  * element.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  * - children: The rendered child elements of the container.*/
/*  * - has_parent: A flag to indicate that the container has one or more parent*/
/*      containers.*/
/*  **/
/*  * @see template_preprocess_container()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     has_parent ? 'js-form-wrapper',*/
/*     has_parent ? 'form-wrapper',*/
/*   ]*/
/* %}*/
/* {{ children }}*/
/* */
