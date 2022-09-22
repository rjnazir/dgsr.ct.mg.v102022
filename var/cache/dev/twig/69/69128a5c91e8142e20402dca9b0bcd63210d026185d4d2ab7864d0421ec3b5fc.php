<?php

/* AdminBundle:CtTypeAnomalie:add.html.twig */
class __TwigTemplate_d99694358697e8bf1fc38619cfb70c68af50b7f43e206043a9b3ad01fe1910f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeAnomalie:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_406a7dbacf66dabc90f83b99846b3f2f95a7a23bd34922cd898c1efea1c41263 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_406a7dbacf66dabc90f83b99846b3f2f95a7a23bd34922cd898c1efea1c41263->enter($__internal_406a7dbacf66dabc90f83b99846b3f2f95a7a23bd34922cd898c1efea1c41263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeAnomalie:add.html.twig"));

        $__internal_137e6403812172ed4a006c9c3f182de24b3dd290420ed79d8354baf593cc8385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_137e6403812172ed4a006c9c3f182de24b3dd290420ed79d8354baf593cc8385->enter($__internal_137e6403812172ed4a006c9c3f182de24b3dd290420ed79d8354baf593cc8385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeAnomalie:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_anomalie"] = true;
        // line 8
        $context["menu_type_anomalie"] = true;
        // line 9
        $context["menu_type_anomalie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_406a7dbacf66dabc90f83b99846b3f2f95a7a23bd34922cd898c1efea1c41263->leave($__internal_406a7dbacf66dabc90f83b99846b3f2f95a7a23bd34922cd898c1efea1c41263_prof);

        
        $__internal_137e6403812172ed4a006c9c3f182de24b3dd290420ed79d8354baf593cc8385->leave($__internal_137e6403812172ed4a006c9c3f182de24b3dd290420ed79d8354baf593cc8385_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c965a199489656a6c29c23ba2f95db181030e8ec4dbbe67c6bcb875bb54bacd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c965a199489656a6c29c23ba2f95db181030e8ec4dbbe67c6bcb875bb54bacd->enter($__internal_6c965a199489656a6c29c23ba2f95db181030e8ec4dbbe67c6bcb875bb54bacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8dbf9aa6a989cb2909051912538320099a8174837fa5db0a5b1434c7a8111a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dbf9aa6a989cb2909051912538320099a8174837fa5db0a5b1434c7a8111a59->enter($__internal_8dbf9aa6a989cb2909051912538320099a8174837fa5db0a5b1434c7a8111a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Type anomalie ";
        
        $__internal_8dbf9aa6a989cb2909051912538320099a8174837fa5db0a5b1434c7a8111a59->leave($__internal_8dbf9aa6a989cb2909051912538320099a8174837fa5db0a5b1434c7a8111a59_prof);

        
        $__internal_6c965a199489656a6c29c23ba2f95db181030e8ec4dbbe67c6bcb875bb54bacd->leave($__internal_6c965a199489656a6c29c23ba2f95db181030e8ec4dbbe67c6bcb875bb54bacd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_845fa764fef4df3a023ecd0f1791a12f5fb8408ed2a31cafa5e7ea48072c4242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_845fa764fef4df3a023ecd0f1791a12f5fb8408ed2a31cafa5e7ea48072c4242->enter($__internal_845fa764fef4df3a023ecd0f1791a12f5fb8408ed2a31cafa5e7ea48072c4242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_55a6fca9842f897426b145b11841cfe1799f5e6c52cefbfffa1460e6ff2e03a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55a6fca9842f897426b145b11841cfe1799f5e6c52cefbfffa1460e6ff2e03a7->enter($__internal_55a6fca9842f897426b145b11841cfe1799f5e6c52cefbfffa1460e6ff2e03a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "        <div class=\"callout callout-success\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 19
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer un type d'anomalie</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atpLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_anomalie\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_anomalie_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_55a6fca9842f897426b145b11841cfe1799f5e6c52cefbfffa1460e6ff2e03a7->leave($__internal_55a6fca9842f897426b145b11841cfe1799f5e6c52cefbfffa1460e6ff2e03a7_prof);

        
        $__internal_845fa764fef4df3a023ecd0f1791a12f5fb8408ed2a31cafa5e7ea48072c4242->leave($__internal_845fa764fef4df3a023ecd0f1791a12f5fb8408ed2a31cafa5e7ea48072c4242_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeAnomalie:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  135 => 37,  127 => 32,  118 => 26,  112 => 22,  103 => 19,  100 => 18,  95 => 17,  86 => 14,  83 => 13,  78 => 12,  69 => 11,  50 => 5,  40 => 1,  38 => 9,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% form_theme form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Ajout Type anomalie {% endblock %}

{% set menu_anomalie             = true %}
{% set menu_type_anomalie        = true %}
{% set menu_type_anomalie_create = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                {{ form_start(form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer un type d'anomalie</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.atpLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_anomalie\"/>
                        <a href=\"{{ path('type_anomalie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtTypeAnomalie:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeAnomalie/add.html.twig");
    }
}
