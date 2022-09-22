<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_cd384c6d9a2f883242f7bb3185ac40d4bc03081dd15f359211d22deba2240acb extends Twig_Template
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
        $__internal_b1928aecee57d5ea8c22dac9766cf70a10cea25c8745c92ba2258e6a22860def = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1928aecee57d5ea8c22dac9766cf70a10cea25c8745c92ba2258e6a22860def->enter($__internal_b1928aecee57d5ea8c22dac9766cf70a10cea25c8745c92ba2258e6a22860def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_c6d548e2bd713f84c18479bdd478bb0a10ac3538b290379755b2e5e03a240f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6d548e2bd713f84c18479bdd478bb0a10ac3538b290379755b2e5e03a240f35->enter($__internal_c6d548e2bd713f84c18479bdd478bb0a10ac3538b290379755b2e5e03a240f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_b1928aecee57d5ea8c22dac9766cf70a10cea25c8745c92ba2258e6a22860def->leave($__internal_b1928aecee57d5ea8c22dac9766cf70a10cea25c8745c92ba2258e6a22860def_prof);

        
        $__internal_c6d548e2bd713f84c18479bdd478bb0a10ac3538b290379755b2e5e03a240f35->leave($__internal_c6d548e2bd713f84c18479bdd478bb0a10ac3538b290379755b2e5e03a240f35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
