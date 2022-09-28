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
        $__internal_8190de19b03e4cb0a886cfad05ed56ac785a9b977940958256bc519bcc0b68cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8190de19b03e4cb0a886cfad05ed56ac785a9b977940958256bc519bcc0b68cf->enter($__internal_8190de19b03e4cb0a886cfad05ed56ac785a9b977940958256bc519bcc0b68cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backoffice/base_admin_footer.html.twig"));

        $__internal_c5f68c778696c7a751d950a3ef7ce2882fb4dd521280173d77e3e1cce9540f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f68c778696c7a751d950a3ef7ce2882fb4dd521280173d77e3e1cce9540f9f->enter($__internal_c5f68c778696c7a751d950a3ef7ce2882fb4dd521280173d77e3e1cce9540f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backoffice/base_admin_footer.html.twig"));

        // line 1
        echo "<footer class=\"main-footer\">
    <div class=\"pull-right hidden-xs\">
        <b>Contrôle technique</b>
    </div>
    <strong>Copyright &copy; 2017 <a href=\"#\">Livenexx</a>.</strong>
</footer>";
        
        $__internal_8190de19b03e4cb0a886cfad05ed56ac785a9b977940958256bc519bcc0b68cf->leave($__internal_8190de19b03e4cb0a886cfad05ed56ac785a9b977940958256bc519bcc0b68cf_prof);

        
        $__internal_c5f68c778696c7a751d950a3ef7ce2882fb4dd521280173d77e3e1cce9540f9f->leave($__internal_c5f68c778696c7a751d950a3ef7ce2882fb4dd521280173d77e3e1cce9540f9f_prof);

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
