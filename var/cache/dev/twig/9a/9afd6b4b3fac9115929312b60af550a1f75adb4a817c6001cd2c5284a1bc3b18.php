<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_50c30154e52f1d0f7012ee5e30e5f13a5ffed28f210bce54bc8f4fbee70ad378 extends Twig_Template
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
        $__internal_13bb8c38798c6b8c439d504ccf2d334d45deda47ee10cc5f59ed6821cbf4ec59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13bb8c38798c6b8c439d504ccf2d334d45deda47ee10cc5f59ed6821cbf4ec59->enter($__internal_13bb8c38798c6b8c439d504ccf2d334d45deda47ee10cc5f59ed6821cbf4ec59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_974f7e757f346b03e04dacac2163e7c39a7705edf9e523696456b1b9d165a5e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_974f7e757f346b03e04dacac2163e7c39a7705edf9e523696456b1b9d165a5e6->enter($__internal_974f7e757f346b03e04dacac2163e7c39a7705edf9e523696456b1b9d165a5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_13bb8c38798c6b8c439d504ccf2d334d45deda47ee10cc5f59ed6821cbf4ec59->leave($__internal_13bb8c38798c6b8c439d504ccf2d334d45deda47ee10cc5f59ed6821cbf4ec59_prof);

        
        $__internal_974f7e757f346b03e04dacac2163e7c39a7705edf9e523696456b1b9d165a5e6->leave($__internal_974f7e757f346b03e04dacac2163e7c39a7705edf9e523696456b1b9d165a5e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
