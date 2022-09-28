<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_7ddf2f4ed8ad3d5da8e157577bb68d584afe65408de99b87ef09d07ccff3053b extends Twig_Template
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
        $__internal_b7dfa389e174a8be80f2931aa26a08627d4b87d34b4e1abe5bb7f30372f13ba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7dfa389e174a8be80f2931aa26a08627d4b87d34b4e1abe5bb7f30372f13ba7->enter($__internal_b7dfa389e174a8be80f2931aa26a08627d4b87d34b4e1abe5bb7f30372f13ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_ec092b28f6a7135482e1d44f2821916f375c4961966ab550196d1dab8a09ffa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec092b28f6a7135482e1d44f2821916f375c4961966ab550196d1dab8a09ffa8->enter($__internal_ec092b28f6a7135482e1d44f2821916f375c4961966ab550196d1dab8a09ffa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b7dfa389e174a8be80f2931aa26a08627d4b87d34b4e1abe5bb7f30372f13ba7->leave($__internal_b7dfa389e174a8be80f2931aa26a08627d4b87d34b4e1abe5bb7f30372f13ba7_prof);

        
        $__internal_ec092b28f6a7135482e1d44f2821916f375c4961966ab550196d1dab8a09ffa8->leave($__internal_ec092b28f6a7135482e1d44f2821916f375c4961966ab550196d1dab8a09ffa8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
