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
        $__internal_df171f9e634b94b02baf03ed2a5d49d9619f337c86c9205e01bde8a17ace557a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df171f9e634b94b02baf03ed2a5d49d9619f337c86c9205e01bde8a17ace557a->enter($__internal_df171f9e634b94b02baf03ed2a5d49d9619f337c86c9205e01bde8a17ace557a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_de3f21fda89965f2f1d8057ac49fc917036f38f70a5b3e8dcf1ab5e8758eff8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de3f21fda89965f2f1d8057ac49fc917036f38f70a5b3e8dcf1ab5e8758eff8a->enter($__internal_de3f21fda89965f2f1d8057ac49fc917036f38f70a5b3e8dcf1ab5e8758eff8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_df171f9e634b94b02baf03ed2a5d49d9619f337c86c9205e01bde8a17ace557a->leave($__internal_df171f9e634b94b02baf03ed2a5d49d9619f337c86c9205e01bde8a17ace557a_prof);

        
        $__internal_de3f21fda89965f2f1d8057ac49fc917036f38f70a5b3e8dcf1ab5e8758eff8a->leave($__internal_de3f21fda89965f2f1d8057ac49fc917036f38f70a5b3e8dcf1ab5e8758eff8a_prof);

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
