<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_bd2e1b68d49de8a52faf1b523d36bfb09e9674be8d46f12572b09c6464cdd1cb extends Twig_Template
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
        $__internal_1941ed0ce7a560684199702599c643ef205d0d61cde307d391d2323be4407415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1941ed0ce7a560684199702599c643ef205d0d61cde307d391d2323be4407415->enter($__internal_1941ed0ce7a560684199702599c643ef205d0d61cde307d391d2323be4407415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_4afdbd87d4da5f9af2d17631f77539f43767749b8e0c6d37c7499858c9bcf7c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4afdbd87d4da5f9af2d17631f77539f43767749b8e0c6d37c7499858c9bcf7c1->enter($__internal_4afdbd87d4da5f9af2d17631f77539f43767749b8e0c6d37c7499858c9bcf7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_1941ed0ce7a560684199702599c643ef205d0d61cde307d391d2323be4407415->leave($__internal_1941ed0ce7a560684199702599c643ef205d0d61cde307d391d2323be4407415_prof);

        
        $__internal_4afdbd87d4da5f9af2d17631f77539f43767749b8e0c6d37c7499858c9bcf7c1->leave($__internal_4afdbd87d4da5f9af2d17631f77539f43767749b8e0c6d37c7499858c9bcf7c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
