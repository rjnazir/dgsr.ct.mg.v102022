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
        $__internal_87616a33e1e8dd1244ada0f5131a29a83de8cc2aa8344994668923eef0fb77e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87616a33e1e8dd1244ada0f5131a29a83de8cc2aa8344994668923eef0fb77e3->enter($__internal_87616a33e1e8dd1244ada0f5131a29a83de8cc2aa8344994668923eef0fb77e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backoffice:base_admin_footer.html.twig"));

        $__internal_c3788245316635b8020689e3900b1ddf2b6f85282258db2c39e5a44b8b21e4fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3788245316635b8020689e3900b1ddf2b6f85282258db2c39e5a44b8b21e4fa->enter($__internal_c3788245316635b8020689e3900b1ddf2b6f85282258db2c39e5a44b8b21e4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backoffice:base_admin_footer.html.twig"));

        // line 1
        echo "<footer class=\"main-footer\">
    <div class=\"pull-right hidden-xs\">
        <b>Contrôle technique</b>
    </div>
    <strong>Copyright &copy; 2017 <a href=\"#\">Livenexx</a>.</strong>
</footer>";
        
        $__internal_87616a33e1e8dd1244ada0f5131a29a83de8cc2aa8344994668923eef0fb77e3->leave($__internal_87616a33e1e8dd1244ada0f5131a29a83de8cc2aa8344994668923eef0fb77e3_prof);

        
        $__internal_c3788245316635b8020689e3900b1ddf2b6f85282258db2c39e5a44b8b21e4fa->leave($__internal_c3788245316635b8020689e3900b1ddf2b6f85282258db2c39e5a44b8b21e4fa_prof);

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
