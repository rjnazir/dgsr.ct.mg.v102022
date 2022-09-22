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
        $__internal_069af3b340fef87123ecce98422c3455a9c98dd12f0f9da35d5b01dbf0628844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_069af3b340fef87123ecce98422c3455a9c98dd12f0f9da35d5b01dbf0628844->enter($__internal_069af3b340fef87123ecce98422c3455a9c98dd12f0f9da35d5b01dbf0628844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_42c09628a55b263b98f9a36cf5747d16a931efa324cd1d9775c9fabb9bfa2141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c09628a55b263b98f9a36cf5747d16a931efa324cd1d9775c9fabb9bfa2141->enter($__internal_42c09628a55b263b98f9a36cf5747d16a931efa324cd1d9775c9fabb9bfa2141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_069af3b340fef87123ecce98422c3455a9c98dd12f0f9da35d5b01dbf0628844->leave($__internal_069af3b340fef87123ecce98422c3455a9c98dd12f0f9da35d5b01dbf0628844_prof);

        
        $__internal_42c09628a55b263b98f9a36cf5747d16a931efa324cd1d9775c9fabb9bfa2141->leave($__internal_42c09628a55b263b98f9a36cf5747d16a931efa324cd1d9775c9fabb9bfa2141_prof);

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
