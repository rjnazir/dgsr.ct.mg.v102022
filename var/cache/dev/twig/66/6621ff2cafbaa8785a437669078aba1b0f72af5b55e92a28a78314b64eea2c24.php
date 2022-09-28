<?php

/* @Admin/CtGenreTarif/edit.html.twig */
class __TwigTemplate_7c44e444095918a6a17ba90e385ab39bbeed159ff045e941e2fe62aef3ceedaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtGenreTarif/edit.html.twig", 1);
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
        $__internal_769c80f5eb9dbc491f38a1e45d91f02bad8ed1e9a009053d1cd26e7f81746a56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_769c80f5eb9dbc491f38a1e45d91f02bad8ed1e9a009053d1cd26e7f81746a56->enter($__internal_769c80f5eb9dbc491f38a1e45d91f02bad8ed1e9a009053d1cd26e7f81746a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtGenreTarif/edit.html.twig"));

        $__internal_50697b191253778046064b11a1bef0289d95b0f572304f5bd410276f41c648ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50697b191253778046064b11a1bef0289d95b0f572304f5bd410276f41c648ce->enter($__internal_50697b191253778046064b11a1bef0289d95b0f572304f5bd410276f41c648ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtGenreTarif/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_genre_tarif"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_769c80f5eb9dbc491f38a1e45d91f02bad8ed1e9a009053d1cd26e7f81746a56->leave($__internal_769c80f5eb9dbc491f38a1e45d91f02bad8ed1e9a009053d1cd26e7f81746a56_prof);

        
        $__internal_50697b191253778046064b11a1bef0289d95b0f572304f5bd410276f41c648ce->leave($__internal_50697b191253778046064b11a1bef0289d95b0f572304f5bd410276f41c648ce_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7938a44a63098831c153f196721e6dfa71e28ff04c364341e1f54c0b864e2e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7938a44a63098831c153f196721e6dfa71e28ff04c364341e1f54c0b864e2e2->enter($__internal_a7938a44a63098831c153f196721e6dfa71e28ff04c364341e1f54c0b864e2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f8f840d816dcb1de6c864efc50b07ea6e71cd1d15476444ac7eeb046373a3cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8f840d816dcb1de6c864efc50b07ea6e71cd1d15476444ac7eeb046373a3cd8->enter($__internal_f8f840d816dcb1de6c864efc50b07ea6e71cd1d15476444ac7eeb046373a3cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification tarif de genre ";
        
        $__internal_f8f840d816dcb1de6c864efc50b07ea6e71cd1d15476444ac7eeb046373a3cd8->leave($__internal_f8f840d816dcb1de6c864efc50b07ea6e71cd1d15476444ac7eeb046373a3cd8_prof);

        
        $__internal_a7938a44a63098831c153f196721e6dfa71e28ff04c364341e1f54c0b864e2e2->leave($__internal_a7938a44a63098831c153f196721e6dfa71e28ff04c364341e1f54c0b864e2e2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_57bbd6e96efffbd3f42edd5743065356156ac8ac87f6e9917dabaa7be8f612ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57bbd6e96efffbd3f42edd5743065356156ac8ac87f6e9917dabaa7be8f612ca->enter($__internal_57bbd6e96efffbd3f42edd5743065356156ac8ac87f6e9917dabaa7be8f612ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9d0c6ab956ec8ec5a5faef42a5f47f4e3c557898d60a8ba8b78e485f250a2321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d0c6ab956ec8ec5a5faef42a5f47f4e3c557898d60a8ba8b78e485f250a2321->enter($__internal_9d0c6ab956ec8ec5a5faef42a5f47f4e3c557898d60a8ba8b78e485f250a2321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <div class=\"callout callout-success\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un tarif genre</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctGenre", array()), 'row');
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "grtPrix", array()), 'row');
        echo "
                        ";
        // line 33
        echo "                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_genre\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_tarif_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_9d0c6ab956ec8ec5a5faef42a5f47f4e3c557898d60a8ba8b78e485f250a2321->leave($__internal_9d0c6ab956ec8ec5a5faef42a5f47f4e3c557898d60a8ba8b78e485f250a2321_prof);

        
        $__internal_57bbd6e96efffbd3f42edd5743065356156ac8ac87f6e9917dabaa7be8f612ca->leave($__internal_57bbd6e96efffbd3f42edd5743065356156ac8ac87f6e9917dabaa7be8f612ca_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtGenreTarif/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 42,  137 => 37,  131 => 33,  127 => 31,  123 => 30,  114 => 24,  108 => 20,  99 => 17,  96 => 16,  91 => 15,  82 => 12,  79 => 11,  74 => 10,  65 => 9,  46 => 5,  36 => 1,  34 => 7,  32 => 3,  11 => 1,);
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

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification tarif de genre {% endblock %}

{% set menu_genre_tarif = true %}

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
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un tarif genre</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctGenre) }}
                        {{ form_row(edit_form.grtPrix) }}
                        {#{{ form_row(edit_form.grtAnnee) }}#}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_genre\"/>
                        <a href=\"{{ path('genre_tarif_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtGenreTarif/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtGenreTarif\\edit.html.twig");
    }
}
