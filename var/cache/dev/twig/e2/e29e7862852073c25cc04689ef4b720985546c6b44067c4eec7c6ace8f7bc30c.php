<?php

/* :backoffice:base_admin_footer.html.twig */
class __TwigTemplate_6116e0afc2e916719c3442be3305509f934e56538af72fd6deb5b15199670302 extends Twig_Template
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
        $__internal_95c37e025d3e49c453c25e3bb435e889cd0431c40af77ec02090bcf78eee33ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95c37e025d3e49c453c25e3bb435e889cd0431c40af77ec02090bcf78eee33ee->enter($__internal_95c37e025d3e49c453c25e3bb435e889cd0431c40af77ec02090bcf78eee33ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backoffice:base_admin_footer.html.twig"));

        $__internal_08ede0d2d34efc707874b2c1119a92d16edee868dcd8e5fcd96400020c9b46ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ede0d2d34efc707874b2c1119a92d16edee868dcd8e5fcd96400020c9b46ce->enter($__internal_08ede0d2d34efc707874b2c1119a92d16edee868dcd8e5fcd96400020c9b46ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backoffice:base_admin_footer.html.twig"));

        // line 1
        echo "<footer class=\"main-footer\">
    <div class=\"pull-right hidden-xs\">
        <b>Contrôle technique</b>
    </div>
    <strong>Copyright &copy; 2017 <a href=\"#\">Livenexx</a>.</strong>
</footer>";
        
        $__internal_95c37e025d3e49c453c25e3bb435e889cd0431c40af77ec02090bcf78eee33ee->leave($__internal_95c37e025d3e49c453c25e3bb435e889cd0431c40af77ec02090bcf78eee33ee_prof);

        
        $__internal_08ede0d2d34efc707874b2c1119a92d16edee868dcd8e5fcd96400020c9b46ce->leave($__internal_08ede0d2d34efc707874b2c1119a92d16edee868dcd8e5fcd96400020c9b46ce_prof);

    }

    public function getTemplateName()
    {
        return ":backoffice:base_admin_footer.html.twig";
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
</footer>", ":backoffice:base_admin_footer.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\app/Resources\\views/backoffice/base_admin_footer.html.twig");
    }
}
