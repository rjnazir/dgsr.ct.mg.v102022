<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_042ae9396423b2497085fffd86881bf5fa6b17a9be7ef5e74fcafc7fb1bcd980 extends Twig_Template
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
        $__internal_80d5c09ea66170f08eb9f95fd2548ba65cce1a7ce14b546589a34ebf234796b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80d5c09ea66170f08eb9f95fd2548ba65cce1a7ce14b546589a34ebf234796b0->enter($__internal_80d5c09ea66170f08eb9f95fd2548ba65cce1a7ce14b546589a34ebf234796b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_4fa8672fa962f32a844c86b698f5a518dcf856a68603a215bcd93194f2600984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa8672fa962f32a844c86b698f5a518dcf856a68603a215bcd93194f2600984->enter($__internal_4fa8672fa962f32a844c86b698f5a518dcf856a68603a215bcd93194f2600984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_80d5c09ea66170f08eb9f95fd2548ba65cce1a7ce14b546589a34ebf234796b0->leave($__internal_80d5c09ea66170f08eb9f95fd2548ba65cce1a7ce14b546589a34ebf234796b0_prof);

        
        $__internal_4fa8672fa962f32a844c86b698f5a518dcf856a68603a215bcd93194f2600984->leave($__internal_4fa8672fa962f32a844c86b698f5a518dcf856a68603a215bcd93194f2600984_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
