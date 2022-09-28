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
        $__internal_519f50418e6cf0b03e5b0d3e56f53a303477c9cab11eef47fed5a8edd969674e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_519f50418e6cf0b03e5b0d3e56f53a303477c9cab11eef47fed5a8edd969674e->enter($__internal_519f50418e6cf0b03e5b0d3e56f53a303477c9cab11eef47fed5a8edd969674e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_c61967b2095b80a39e3b0f83e304edd6e0a51ad94e7c543ec51bd745d94c66e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c61967b2095b80a39e3b0f83e304edd6e0a51ad94e7c543ec51bd745d94c66e4->enter($__internal_c61967b2095b80a39e3b0f83e304edd6e0a51ad94e7c543ec51bd745d94c66e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_519f50418e6cf0b03e5b0d3e56f53a303477c9cab11eef47fed5a8edd969674e->leave($__internal_519f50418e6cf0b03e5b0d3e56f53a303477c9cab11eef47fed5a8edd969674e_prof);

        
        $__internal_c61967b2095b80a39e3b0f83e304edd6e0a51ad94e7c543ec51bd745d94c66e4->leave($__internal_c61967b2095b80a39e3b0f83e304edd6e0a51ad94e7c543ec51bd745d94c66e4_prof);

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
