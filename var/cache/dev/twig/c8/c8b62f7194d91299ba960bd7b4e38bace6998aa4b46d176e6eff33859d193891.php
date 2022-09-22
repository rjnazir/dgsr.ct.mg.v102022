<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_923ff0effa0fa3f33a5249d1571e6adced2109f7fe717f5aa43a05b387d0cb58 extends Twig_Template
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
        $__internal_58dc3a5c922486f854bb88cbd9e95171861b617717650152e1127d8f4ea29722 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58dc3a5c922486f854bb88cbd9e95171861b617717650152e1127d8f4ea29722->enter($__internal_58dc3a5c922486f854bb88cbd9e95171861b617717650152e1127d8f4ea29722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_cf1277fbd4d20cd793352ab988823f29d6939ac2d63879faf104e795735bd933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf1277fbd4d20cd793352ab988823f29d6939ac2d63879faf104e795735bd933->enter($__internal_cf1277fbd4d20cd793352ab988823f29d6939ac2d63879faf104e795735bd933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_58dc3a5c922486f854bb88cbd9e95171861b617717650152e1127d8f4ea29722->leave($__internal_58dc3a5c922486f854bb88cbd9e95171861b617717650152e1127d8f4ea29722_prof);

        
        $__internal_cf1277fbd4d20cd793352ab988823f29d6939ac2d63879faf104e795735bd933->leave($__internal_cf1277fbd4d20cd793352ab988823f29d6939ac2d63879faf104e795735bd933_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
