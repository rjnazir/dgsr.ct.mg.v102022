<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_69ba1a18733f3b12f03c8f98ddb056a3f89ca1c151fb11457b68633029f9ab24 extends Twig_Template
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
        $__internal_2813c0c1c012db975701d830d63d43f3787f82666fe61c964723fcb7a90ea70a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2813c0c1c012db975701d830d63d43f3787f82666fe61c964723fcb7a90ea70a->enter($__internal_2813c0c1c012db975701d830d63d43f3787f82666fe61c964723fcb7a90ea70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_48c488bcbadbef7450b593b335b270bb7645c6400571cc010a45795cb152f496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48c488bcbadbef7450b593b335b270bb7645c6400571cc010a45795cb152f496->enter($__internal_48c488bcbadbef7450b593b335b270bb7645c6400571cc010a45795cb152f496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_2813c0c1c012db975701d830d63d43f3787f82666fe61c964723fcb7a90ea70a->leave($__internal_2813c0c1c012db975701d830d63d43f3787f82666fe61c964723fcb7a90ea70a_prof);

        
        $__internal_48c488bcbadbef7450b593b335b270bb7645c6400571cc010a45795cb152f496->leave($__internal_48c488bcbadbef7450b593b335b270bb7645c6400571cc010a45795cb152f496_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
