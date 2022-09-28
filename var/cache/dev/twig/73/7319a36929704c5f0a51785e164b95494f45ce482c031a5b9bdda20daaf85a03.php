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
        $__internal_ea2631e16b7a38d68217de30f724ece060c732f0cf00d81ecaa2e88578b29ea8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea2631e16b7a38d68217de30f724ece060c732f0cf00d81ecaa2e88578b29ea8->enter($__internal_ea2631e16b7a38d68217de30f724ece060c732f0cf00d81ecaa2e88578b29ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_ebea1fc179ff23a9e96ad268f1ef61e3389da47bedb3e356b10b9d5dac1cce4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebea1fc179ff23a9e96ad268f1ef61e3389da47bedb3e356b10b9d5dac1cce4a->enter($__internal_ebea1fc179ff23a9e96ad268f1ef61e3389da47bedb3e356b10b9d5dac1cce4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_ea2631e16b7a38d68217de30f724ece060c732f0cf00d81ecaa2e88578b29ea8->leave($__internal_ea2631e16b7a38d68217de30f724ece060c732f0cf00d81ecaa2e88578b29ea8_prof);

        
        $__internal_ebea1fc179ff23a9e96ad268f1ef61e3389da47bedb3e356b10b9d5dac1cce4a->leave($__internal_ebea1fc179ff23a9e96ad268f1ef61e3389da47bedb3e356b10b9d5dac1cce4a_prof);

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
