<?php

/* @Admin/CtVisiteExtra/edit.html.twig */
class __TwigTemplate_829d560809aca98c4a129aab5c81e25f1ae6b14cb3f415747cbc9f770def0625 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtVisiteExtra/edit.html.twig", 1);
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
        $__internal_0e9fb76c058598c54debd4d387824c15ec24c9032a473809e16ad9f47759dd41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e9fb76c058598c54debd4d387824c15ec24c9032a473809e16ad9f47759dd41->enter($__internal_0e9fb76c058598c54debd4d387824c15ec24c9032a473809e16ad9f47759dd41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtVisiteExtra/edit.html.twig"));

        $__internal_9270f5e4961d217fe730d761d952a1ae54545733394d6b12d932d9e4e40ba0b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9270f5e4961d217fe730d761d952a1ae54545733394d6b12d932d9e4e40ba0b2->enter($__internal_9270f5e4961d217fe730d761d952a1ae54545733394d6b12d932d9e4e40ba0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtVisiteExtra/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_visite_extra"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e9fb76c058598c54debd4d387824c15ec24c9032a473809e16ad9f47759dd41->leave($__internal_0e9fb76c058598c54debd4d387824c15ec24c9032a473809e16ad9f47759dd41_prof);

        
        $__internal_9270f5e4961d217fe730d761d952a1ae54545733394d6b12d932d9e4e40ba0b2->leave($__internal_9270f5e4961d217fe730d761d952a1ae54545733394d6b12d932d9e4e40ba0b2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_404c9929161fa9739d894e555a4ae6c84f0d0ad09b8cc661de59aba792c304f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_404c9929161fa9739d894e555a4ae6c84f0d0ad09b8cc661de59aba792c304f5->enter($__internal_404c9929161fa9739d894e555a4ae6c84f0d0ad09b8cc661de59aba792c304f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_41a55e77b02a9163114c4975e4ff2d0c8b5cabd5f2e96dcc584e8527cf4e871d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41a55e77b02a9163114c4975e4ff2d0c8b5cabd5f2e96dcc584e8527cf4e871d->enter($__internal_41a55e77b02a9163114c4975e4ff2d0c8b5cabd5f2e96dcc584e8527cf4e871d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Visite extra ";
        
        $__internal_41a55e77b02a9163114c4975e4ff2d0c8b5cabd5f2e96dcc584e8527cf4e871d->leave($__internal_41a55e77b02a9163114c4975e4ff2d0c8b5cabd5f2e96dcc584e8527cf4e871d_prof);

        
        $__internal_404c9929161fa9739d894e555a4ae6c84f0d0ad09b8cc661de59aba792c304f5->leave($__internal_404c9929161fa9739d894e555a4ae6c84f0d0ad09b8cc661de59aba792c304f5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_def6d6f10e0fcca70828a7b2474333b1bd9d24f3c376df4ab8fce2e0cd3f293f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_def6d6f10e0fcca70828a7b2474333b1bd9d24f3c376df4ab8fce2e0cd3f293f->enter($__internal_def6d6f10e0fcca70828a7b2474333b1bd9d24f3c376df4ab8fce2e0cd3f293f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_be8d6cf96cdfbaa742759c689ee0c38e4fb98e8ae1d51eede3931ac549a3c043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be8d6cf96cdfbaa742759c689ee0c38e4fb98e8ae1d51eede3931ac549a3c043->enter($__internal_be8d6cf96cdfbaa742759c689ee0c38e4fb98e8ae1d51eede3931ac549a3c043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une visite extra</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "vsteLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_visite_extra\"/>
                        <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_be8d6cf96cdfbaa742759c689ee0c38e4fb98e8ae1d51eede3931ac549a3c043->leave($__internal_be8d6cf96cdfbaa742759c689ee0c38e4fb98e8ae1d51eede3931ac549a3c043_prof);

        
        $__internal_def6d6f10e0fcca70828a7b2474333b1bd9d24f3c376df4ab8fce2e0cd3f293f->leave($__internal_def6d6f10e0fcca70828a7b2474333b1bd9d24f3c376df4ab8fce2e0cd3f293f_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtVisiteExtra/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 40,  131 => 35,  123 => 30,  114 => 24,  108 => 20,  99 => 17,  96 => 16,  91 => 15,  82 => 12,  79 => 11,  74 => 10,  65 => 9,  46 => 5,  36 => 1,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification Visite extra {% endblock %}

{% set menu_visite_extra = true %}

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
                        <h3 class=\"box-title\">Editer une visite extra</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.vsteLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_visite_extra\"/>
                        <a href=\"{{ path('visite_extra_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtVisiteExtra/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtVisiteExtra\\edit.html.twig");
    }
}
