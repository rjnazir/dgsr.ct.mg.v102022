<?php

/* backoffice/base_admin_footer.html.twig */
class __TwigTemplate_63d6a9838d6a39e4b9bb7cbcdd8062e18a76bf0cc31666ffb2c449a8ccc86f83 extends Twig_Template
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
        $__internal_9fff0f21519cc14097927357fd412dfbb859f43af24a6dfe9c05ab95e831e1a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fff0f21519cc14097927357fd412dfbb859f43af24a6dfe9c05ab95e831e1a7->enter($__internal_9fff0f21519cc14097927357fd412dfbb859f43af24a6dfe9c05ab95e831e1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backoffice/base_admin_footer.html.twig"));

        $__internal_516f00ead269964f2aa5806f3723302265e5bbfe26cbc1cc0c2c5e7e5ac0027a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_516f00ead269964f2aa5806f3723302265e5bbfe26cbc1cc0c2c5e7e5ac0027a->enter($__internal_516f00ead269964f2aa5806f3723302265e5bbfe26cbc1cc0c2c5e7e5ac0027a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backoffice/base_admin_footer.html.twig"));

        // line 1
        echo "<footer class=\"main-footer\">
    <div class=\"pull-right hidden-xs\">
        <b>Contrôle technique</b>
    </div>
    <strong>Copyright &copy; 2017 <a href=\"#\">Livenexx</a>.</strong>
</footer>";
        
        $__internal_9fff0f21519cc14097927357fd412dfbb859f43af24a6dfe9c05ab95e831e1a7->leave($__internal_9fff0f21519cc14097927357fd412dfbb859f43af24a6dfe9c05ab95e831e1a7_prof);

        
        $__internal_516f00ead269964f2aa5806f3723302265e5bbfe26cbc1cc0c2c5e7e5ac0027a->leave($__internal_516f00ead269964f2aa5806f3723302265e5bbfe26cbc1cc0c2c5e7e5ac0027a_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/base_admin_footer.html.twig";
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
        return new Twig_Source("<footer class=\"main-footer\">
    <div class=\"pull-right hidden-xs\">
        <b>Contrôle technique</b>
    </div>
    <strong>Copyright &copy; 2017 <a href=\"#\">Livenexx</a>.</strong>
</footer>", "backoffice/base_admin_footer.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\app\\Resources\\views\\backoffice\\base_admin_footer.html.twig");
    }
}
