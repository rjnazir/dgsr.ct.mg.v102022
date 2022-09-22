<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_227c1b9c37315cd5bba5f15805197c2b386c526d95d4e55f304550b55c8fcb6d extends Twig_Template
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
        $__internal_d9b4d99ad672af0295240bd67b510653b1ea749fd464357ba942bb1cb38bda1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9b4d99ad672af0295240bd67b510653b1ea749fd464357ba942bb1cb38bda1d->enter($__internal_d9b4d99ad672af0295240bd67b510653b1ea749fd464357ba942bb1cb38bda1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_7b59ed09fec2122b22de35c3f35c71a163e5a8fa83037fee4471ce4745fa4fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b59ed09fec2122b22de35c3f35c71a163e5a8fa83037fee4471ce4745fa4fc6->enter($__internal_7b59ed09fec2122b22de35c3f35c71a163e5a8fa83037fee4471ce4745fa4fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d9b4d99ad672af0295240bd67b510653b1ea749fd464357ba942bb1cb38bda1d->leave($__internal_d9b4d99ad672af0295240bd67b510653b1ea749fd464357ba942bb1cb38bda1d_prof);

        
        $__internal_7b59ed09fec2122b22de35c3f35c71a163e5a8fa83037fee4471ce4745fa4fc6->leave($__internal_7b59ed09fec2122b22de35c3f35c71a163e5a8fa83037fee4471ce4745fa4fc6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
